<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Charts;
use DB;

use App\User;
use App\Models\Home;
use App\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
      $monthlyViews = Home::find(1)->getPageViewsFrom(Carbon::now()->subMonths(1));
      $monthlyUsers = User::whereMonth('created_at',date('m'))->count();
      $user = User::select('created_at')->where('verified',1)->get();
      $non = User::select('created_at')->where('verified',0)->get();
      $chart = Charts::multiDatabase('line', 'highcharts')
                     ->title('User report')
                     ->responsive(true)
                     ->dataset('Verified user', $user)
                     ->dataset('non-verified user', $non)
                     ->groupByDay(date('m'), date('Y'), true);
      return view('admin.index', compact('monthlyUsers','monthlyViews', 'chart'));
    }
}
