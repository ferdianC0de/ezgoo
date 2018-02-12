<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlaneSchedule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $planeSchedule = PlaneSchedule::select('id')->get();
        return $planeSchedule;
        return view('index');
    }
}
