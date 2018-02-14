<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Passenger;
use App\Models\DetailBooking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function dBooking(Request $request)
    {
        $booking = Booking::all();
        return view('frontend/booking', compact('booking'));
    }

    public function bookingPlane(Request $request)
    {
        //booking
        $date = date('Y-m-d H:i:s');
        $request->request->add(['booking_date' => $date]);
        $data = request()->validate([
            'booking_date'      => 'required',
            'type'              => 'required',
            'schedule_id'       => 'required'
        ]);
        $booking = Booking::create($data);
        $request->request->add(['booking_id'=> $booking->id]);
        //detailbooking
        $dBooking = request()->validate([
            'booking_id'        => 'required',
            'passenger'        => 'required',
            'class'             => 'required',

        ]);
        $dBooking = DetailBooking::create($dBooking);
        $request->request->add(['detail_booking_id' => $dBooking->id]);
        //passenger
        $passenger = request()->validate([
            'detail_booking_id' => 'required',
            'name'              => 'required',

        ]);
        Passenger::create($passenger);
        return redirect('frontend/book');

      public function search(Request $request)
      {
        if ($request->baby <= $request->adult){
          $total = [
            'baby' => $request->baby,
            'child'=> $request->child,
            'adult'=> $request->adult
          ];
          $vehicle = $request->vehicle;
          $type = $request->type;
          $seat  = "";
          $model = "";
          //cek kendaraan
          if ($vehicle == 'plane'){
            $model = $this->planeSchedule;
          }elseif($vehicle == 'train'){
            $model = $this->trainSchedule;
          }
          //cek kursi
          if ($request->class == "Ekonomi") {
            $seat = 'eco_seat';
          }elseif($request->class == "Bisnis") {
            $seat = 'bus_seat';
          }elseif($request->class == "First Class"){
            $seat = 'first_seat';
          }elseif($request->class == "Executive Class"){
            $seat = 'exec_seat';
          }
          //cek tipe
          if ($type == 'st'){
            $schedule = $model::findSchedule($request->from, $request->destination, $request->date, $seat, count($total));
            return view('booking.bookingSingle', compact('schedule', 'vehicle','type','total', 'seat'));
            // return $schedule;
          }elseif($type == 'rt'){
            $scheduleG = $model::findSchedule($request->from, $request->destination, $request->date, $seat, count($total));
            $scheduleB = $model::findSchedule($request->destination, $request->from, $request->dateB, $seat, count($total));
            return view('booking.bookingRound', compact('scheduleG', 'scheduleB', 'vehicle','type','total', 'seat'));
            // return $scheduleG;
          }else{
            abort(404);
          }
        }else{
          return redirect('')->withError('Bayi tidak boleh lebih dari dewasa');
        }
      }
      public function order(Request $request)
      {
        $model = "";
        $class = "";
        $vehicle = $request->vehicle;
        $id = [$request->go,$request->back];
        $fareTotal = 0;
        $total = explode(',',$request->total);
        $totalCount = $total[0] + $total[1] + $total[2];
        $total = [
          'baby' => $total[0],
          'child'=> $total[1],
          'adult'=> $total[2]
        ];
        $seat = $request->seat;
<<<<<<< HEAD

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
=======
        if ($seat == 'eco_seat') {
          $class = 'Ekonomi';
        }elseif($seat == 'bus_seat'){
          $class = 'Bisnis';
        }elseif($seat == 'first_seat'){
          $class = 'First Class';
        }elseif($seat == 'exec_seat'){
          $class = 'Eksekutif';
        }
        if ($vehicle == 'plane'){
          $model = $this->planeSchedule;
        }elseif($vehicle == 'train'){
          $model = $this->trainSchedule;
        }
>>>>>>> 595f1d00ffb6498390ea62124c8b0c4cecb0196d

        if (isset($id) && isset($seat)) {
          $schedule = $model::findWithPrice($id, $seat);
        }else{
          abort(404);
        }
        return view('booking.bookingFix', compact('schedule','vehicle', 'total', 'totalCount', 'seat', 'class', 'fareTotal'));
      }
      public function fixOrder(Request $request)
      {
        return $request;
        // if (Auth::check()) {
          $modelV = "";
          $modelF = "";
          $modelS = "";
          $vehicle = $request->vehicle;
          $type = $request->type;
          $id = $request->id;
          // $userId = Auth::user()->id;
          $total = $request->total;
          $seat = $request->seat;

          if ($vehicle == 'plane'){
            $modelV = $this->plane;
            $modelF = $this->planeFare;
            $modelS = $this->planeSchedule;
          }elseif($vehicle == 'train'){
            $modelV = $this->train;
            $modelF = $this->trainFare;
            $modelS = $this->trainSchedule;
          }

          if (isset($request->type) && isset($id)) {
            $math = $modelS::seatMath($total, $seat, $id);
            return $math;
          }else{
            abort(404);
          }
        // }else{
        //   return 'Register dulu baru bisa pesen';
        // }
      }
      public function test()
      {
        return view('test.testTable');
      }
      public function testData(Datatables $datatables)
      {
        $query = Plane::select('*');
        return $datatables->eloquent($query)->make(true);
      }
      //Note
      //->make(true); selalu paling akhir
      //Nambah kolom
        //->addColumn('nama-kolom', function($bebas){
        // apapun yang mau ditampilin, nanti isinya tinggal return
        //})
      //Edit kolom
        //->editColumn('kolom-yang-diedit', function($bebas){
        //sama aja kaya nambah, cuma ini ngedit yg udah ada
        //})
      //Kalo mau nambahin kolom + html
        //->rawColumns(['action','lengthofcontract'])
}
