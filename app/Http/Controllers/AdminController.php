<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function showUsers()
    {
      $users = User::all();
      return view('admin.users', compact('users'));
    }

    public function planeAjax($id)
    {
      $plane = DB::table("planes")->where("id",$id)->get();
      return response()->json($plane);
    }

    public function airportAjax($id)
    {
      $airport = DB::table("airports")->where("id",$id)->get();
      return response()->json($airport);
    }

    public function trainAjax($id)
    {
      $train = DB::table("trains")->where("id",$id)->get();
      return response()->json($train);
    }

    public function stationAjax($id)
    {
      $station = DB::table("train_stations")->where("id",$id)->get();
      return response()->json($station);
    }

    public function destinationAjax($id)
    {
      $destination = DB::table("airports")->where("id",$id)->get();
      return response()->json($destination);
    }
}
