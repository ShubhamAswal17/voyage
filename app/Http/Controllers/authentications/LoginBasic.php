<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  }
  public function loginAdmin(Request $request)
  {
    $logindata = $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ], [
      'password.required' => 'The password field is required.',
      'email.required' => 'The email field is required.',
      'email.email' => 'Email must be a valid email.'
    ]);






  }

  public function loginUser(Request $request)
  {


  }
  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
}