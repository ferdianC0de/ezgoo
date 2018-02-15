<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Passenger;
use App\Models\DetailBooking;
use Auth;

class BookingController extends Controller
{
    public function __construct()
    {
      $this->plane = "App\Models\Plane";
      $this->planeFare = "App\Models\PlaneFare";
      $this->planeSchedule = "App\Models\planeSchedule";
      $this->train = "App\Models\Train";
      $this->trainFare = "App\Models\TrainFare";
      $this->trainSchedule = "App\Models\trainSchedule";
    }
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

      if (isset($id) && isset($seat)) {
        $schedule = $model::findWithPrice($id, $seat);
      }else{
        abort(404);
      }
      return view('booking.bookingFix', compact('schedule','vehicle', 'total', 'totalCount', 'seat', 'class', 'fareTotal'));
    }
    public function fixOrder(Request $request)
    {
      if (Auth::check()) {
        $modelV = "";
        $modelF = "";
        $modelS = "";
        $vehicle = $request->vehicle;
        $id = $request->id;
        $userId = Auth::user()->id;
        $total = $request->totalCount;
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

        if (isset($id)) {
          $math = $modelS::seatMath($total, $seat, $id);
          $date = date('Y-m-d H:i:s');
          $request->request->add(['booking_date' => $date]);
          $request->request->add(['user_id' => $userId]);
          $booking = request()->validate([
              'user_id'       => 'required',
              'booking_date'  => 'required',
              'vehicle'       => 'required',
              'schedule_id'   => 'required',
          ]);
          $booking = Booking::create($booking);
          $request->request->add(['booking_id'  => $booking->id]);
          $request->request->add(['passenger'   => $total]);
          $dbooking = request()->validate([
              'booking_id'  =>  'required',
              'passenger'   =>  'required',
              'fare'        =>  'required',
              'class'       =>  'required',
          ]);
          $dbooking = DetailBooking::create($dbooking);

          $data = [];
          for ($i=0; $i < count($request->name); $i++) {
            $data[] = [
              'detail_booking_id' => $dbooking->id,
              'name'              => $request->name[$i],
            ];
          }
          $p = Passenger::insert($data);

          return [$booking,$dbooking,$p];
        }else{
          abort(404);
        }
      // }else{
      //   return 'Register dulu baru bisa pesen';
      // }
    }
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
