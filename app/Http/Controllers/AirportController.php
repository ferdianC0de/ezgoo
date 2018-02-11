<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\PlaneSchedule;
use App\Models\PlaneFare;
use App\Models\Plane;
use App\Models\Airport;
use App\Models\Booking;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Airport::all();
        return view('modulplane.airport.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modulplane.airport.create');
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
        $data = new Airport();
        $data->airport_name = $request->airport_name;
        $data->code = $request->code;
        $data->city = $request->city;
        $data->save();
        return redirect()->route('modulplane.airport.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = Airport::where('id',$id)->get();

          return view('modulplane.airport.edit',compact('data'));
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
        $data = Airport::where('id',$id)->first();
              $data->airport_name = $request->airport_name;
              $data->code = $request->code;
              $data->city = $request->city;
              $data->save();
              return redirect()->route('modulplane.airport.index')->with('alert-success','Data berhasil diubah!');
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
        $data = Airport::where('id',$id)->first();
          $data->delete();
          return redirect()->route('modulplane.airport.index')->with('alert-success','Data berhasi dihapus!');
    }
}
