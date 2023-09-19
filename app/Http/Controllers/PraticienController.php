<?php

namespace App\Http\Controllers;

use App\Models\praticien;
use Illuminate\Http\Request;

class PraticienController extends Controller
{
    public function index(){
        $praticiens = praticien::paginate(3);
        return view('admin.praticien',compact('praticiens'));
    }
}
