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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

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
          return view('test.plane.testSingle', compact('planeSchedule', 'total', 'seat'));
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
          return view('test.plane.testRound', compact('planeScheduleG','planeScheduleB', 'total', 'seat'));
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
        $seat = $request->seat;
        if ($request->type == "st") {
          $planeSchedule = PlaneSchedule::find($id);
        }elseif ($request->type == "rt" && count($id) == 2){
          $planeSchedule = PlaneSchedule::find($id);
        }else{
          return back()->withAlert('Harap pilih penerbangan.');
        }
        return view('test.fix', compact('planeSchedule', 'total','seat'));
      }


      public function fixOrder(Request $request)
      {
        if (Auth::check()) {
          $id = [$request->go,$request->back];
          $total = $request->total;
          $userID = Auth::user()->id;

          if ($request->type == "st") {
            $planeSchedule = PlaneSchedule::find($id);
            Booking::singleTrip($request->go, $userID);
            PlaneSchedule::seatMath($total, $request->seat, $id);
          }elseif ($request->type == "rt" && count($id) == 2){
            $planeSchedule = PlaneSchedule::find($id);
            // Booking::singleTrip($request->go,$request->back,$userID);
          }else{
            return back()->withAlert('Harap pilih penerbangan.');

          }
          // return view('', compact('PlaneSchedule', 'total'));
        }else{
          return 'Register dulu mang baru bisa beli tiket';
        }

      }
}
