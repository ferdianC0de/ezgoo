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

    public function edit($id, $type)
    {
      if ($type == 'profile') {
        return view('user.edit');
      } elseif($type == 'password') {
        return view('user.edit');
      } else {
        return abort(404);
      }
    }

    public function update($id, $type, Request $request)
    {
      if (Auth::user()->id == $id) {
        $user = User::find($id);
        if ($type == 'profile') {
          $data = $this->validate($request, [
            'name' => 'required|string',
            'email'=> 'required|string|email'
          ]);
          $user->update($data);
          return back()->with('success', 'Profile successfuly updated');
        } elseif($type == 'password') {
          if (password_verify($user->password, $request->password)) {
            $data = $this->validate($request, [
              'password' => 'required|string|min:6|confirmed'
            ]);
            $user->update($data);
            return back()->with('success', 'Password successfuly updated.');
          } else {
            return back()->with('error', 'Wrong old password');
          }
        } else {
          return abort(404);
        }
      } else {
        return abort(500);
      }
    }

    public function destroy($id)
    {
      $user = User::find($id);
      if ($user->delete()) {
        return response()->json(['message' => 'success']);
      } else {
        return response()->json(['message' => 'error']);
      }
    }
}
