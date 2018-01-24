<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USe App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','isVerified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id)
    {
      $data = User::find($id);
      return view('edit',$data);
    }
}
