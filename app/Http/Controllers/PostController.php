<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = post::paginate(3);
        return view('admin.post',compact('posts'));
    }

    
    public function create(){
        $categories = category::all();
        return view('admin.ajoutPost',compact('categories'));
    }

    public function store(Request $request){
        
        $request->validate([
            'titre' => 'required|string|',
            'description' => 'required',
            'category_id' => 'required',
            'photo' => 'image',
        ]);
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['photo'] = "$picture";
        }
        post::create($input);
        return back()->with('success','ajout reussi');
    }
}
