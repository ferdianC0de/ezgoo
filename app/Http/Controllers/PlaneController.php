<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\PlaneSchedule;
use App\Models\PlaneFare;
use App\Models\Plane;
use App\Models\Airport;
use App\Models\Booking;

class PlaneController extends Controller
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
      // TODO: Total masuk ke form hidden
      $seat = "";
      if ($request->baby <= $request->adult) {
        if ($request->class == "Ekonomi") {
          $seat = 'eco_seat';
        }elseif($request->class == "Bisnis") {
          $seat = 'bus_seat';
        }elseif($request->class == "First Class"){
          $seat = 'first_class';
        }
      $total = $request->child + $request->adult;
      //Single trip
        if ($request->type == "st") {
          $planeSchedule = PlaneSchedule::where([
            ['from', '=', $request->from],
            ['destination', '=', $request->destination],
            ['boarding_time', 'like', '%'.$request->date.'%'],
            [$seat, '>=', $total]
          ])->get();
          return view('test.testSingle', compact('planeSchedule', 'total', 'seat'));
        //Round trip


        }elseif($request->type == "rt") {
          $planeScheduleG = PlaneSchedule::where([
            ['from', '=', $request->from],
            ['destination', '=', $request->destination],
            ['boarding_time', 'LIKE', '%'.$request->date.'%'],
            [$seat, '>=', $total]
          ])->get();
          $planeScheduleB = PlaneSchedule::where([
            ['from', '=', $request->destination],
            ['destination', '=', $request->from],
            ['boarding_time', 'LIKE', '%'.$request->dateB.'%'],
            [$seat, '>=', $total]
          ])->get();
          return view('test.testRound', compact('planeScheduleG','planeScheduleB', 'total', 'seat'));
        }else{
          abort(404);
        }

      }else{
        return 'Bayi gabole lebih dari dewasa';
      }
    }
      public function order(Request $request)
      {
        // TODO: Ambil variabel total buat banyaknya form
        $id = [$request->go,$request->back];
        $total = $request->total;
        if ($request->type == "st") {
          $planeSchedule = PlaneSchedule::find($request->go);
          $bookings = new Booking();
          $bookings->user_id = Auth::user()->id;
          $bookings->booking_date = date('Y-m-d H:i:s');
          $bookings->status = 1;
          $bookings->type = "Pesawat";
          $bookings->schedule_id = $request->go;
          $bookings->save();

        }elseif ($request->type == "rt" && count($id) == 2){
          $planeSchedule = PlaneSchedule::find($id);
          $booking = new Booking();
          $booking->user_id = Auth::user()->id;
          $booking->booking_date = date('Y-m-d H:i:s');
          $booking->status = 1;
          $booking->type = "Pesawat";
          $booking->schedule_id = $id[0];
          $booking->save();

          $booking2 = new Booking();
          $booking2->user_id = Auth::user()->id;
          $booking2->booking_date = date('Y-m-d H:i:s');
          $booking2->status = 1;
          $booking2->type = "Pesawat";
          $booking2->schedule_id = $id[1];
          $booking2->save();
        }else{
          return back()->withAlert('Harap pilih penerbangan.');
        }

        // return view('', compact('PlaneSchedule', 'total'));
        return json_encode($planeSchedule);
      }


      public function fixOrder(Request $request)
      {
        $bookingContact = $this->validate($request, [
          'name' => 'required',
          'email'=> 'required',
          'contact' => 'required'
        ]);
        $booking_id = Booking::create($bookingContact)->id;

        $passengerData = $this->validate($request, [
          'id' => 'required',
          'name' => 'required',
          'birthdate' => 'required'
        ]);
      }
}
