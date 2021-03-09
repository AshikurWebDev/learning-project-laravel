<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
   public function getSessionData(Request $req){
      if($req->session()->has('name')){
         echo $req->session()->get('name');
      }else{
         echo "No Data Found in Session";
      }
   }

   public function storeSessionData(Request $req){
      $req->session()->put('name', 'Jennifer');
      echo "Data has been added to the Session";
   }

   public function deleteSessionData(Request $req){
      $req->session()->forget('name');
      echo "Data has been removed from the session";
   }

}
