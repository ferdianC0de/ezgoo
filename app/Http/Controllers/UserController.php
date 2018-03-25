<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
      return 'hi user';
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return back()->with('success', 'Successfully deleted!');
    }
}
