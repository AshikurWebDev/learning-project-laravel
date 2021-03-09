<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function index(){
      return view('login');
   }

   public function loginSubmit(Request $req) {
      $validatedData = $req->validate([
         'email'=> 'required|email',
         'password' => 'required|min:6|max:12',
      ]);
      $email = $req->input('email');
      $password = Hash::make($req->input('password'));
      return 'Email : '. $email . '<br>Password :'. $password ;
   }
}
