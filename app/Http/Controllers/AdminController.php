<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Charts;
use DB;

use App\User;
use App\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
      $user = User::select('created_at')->where('verified',1)->get();
      $non = User::select('created_at')->where('verified',0)->get();
      $chart = Charts::multiDatabase('line', 'morris')
            ->dataset('Verified user', $user)
            ->dataset('Non-verified user', $non)
            ->groupByDay(date('m'), date('Y'), true);
      return view('admin.index', compact('chart'));
    }
    public function chart($year)
    {
      if (isset($year)) {
        # code...
      }
    }
}
