<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Trains;

class HomeController extends Controller
{
 public function index(){

     $trains = Trains::all();
     dd($trains);

    return $trains;
 }
}
