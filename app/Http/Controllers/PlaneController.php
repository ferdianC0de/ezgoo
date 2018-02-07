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
