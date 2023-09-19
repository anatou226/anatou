<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\praticien;
use Illuminate\Http\Request;

class accueilController extends Controller
{
   public function accueil(){
    $praticiens = praticien::all();
    $posts = post::all();
    return view('welcome',compact('praticiens','posts'));
   }
}
