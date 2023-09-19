<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::paginate(3);
        return view('admin.category',compact('categories'));
    }

    public function create(){
        return view('admin.ajoutCategory');
    }

    public function store(Request $request){
        
        category::create([
            'libele'=>$request->libele
        ]);

        return back()->with('success','ajout reussi');
    }
    public function supprimer( $id){
        $cat = category::find($id);
        $cat->delete();
        return back ();
    }
    public function editer( $id){
        $cat = category::find($id);
        $cat->edit();
        return back ();
    } 

}
