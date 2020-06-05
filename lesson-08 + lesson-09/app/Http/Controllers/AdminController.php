<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function start(Request $req , $id){

      return $id.' - '.$req->input('name');

    }
}
