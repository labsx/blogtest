<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Posts::all();
        //  $data = Posts::where('id', 100) ->firstOrFail()->get();
              return view('index', ['posts' => $data]);
}

public function show( $id){
    //$data = Posts::all();
         $data = Posts::findOrFail($id);
        dd($data);
        return view('slug.index', ['posts' => $data]);
}
}
