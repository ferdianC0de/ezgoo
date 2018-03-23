<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
      return view('home');
    }
    public function verify($token)
    {
      $user = User::where('token', $token)->first();
      if ($user) {
        if (!$user->verified) {
          $user->verified = 1;
          $user->token = null;
          $user->save();
          $status = 'Verification success! login to continue';
        } else {
          $status = 'Your email is already verified, login to continue';
        }
      }else{
        return redirect('login')->with('error', 'Sorry, your email cannot be identified.');
      }
      return redirect('login')->with('success', $status);
    }
}
