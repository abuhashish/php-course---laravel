<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller

{
    public function index(){

        $cats=Cat::paginate(2);
       // dd($Cats);
       return view('cats/index',[
           'allcats'=> $cats
       ]);
    }

    public function show($id){
        $cat=Cat::findOrFail($id);
        return view('cats/show',[
            'cat'=>$cat
        ]);

    }

    public function create(){
        return view('cats/create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',


        ]);

      Cat::create([
          'name'=>$request->name,


      ]);
      return redirect(url('cats'));
    }

public function edit($id){
    $cat=Cat::findOrFail($id);

    return view('cats/edit',[
        'cat'=>$cat
    ]);
}
public function update($id,Request $request ){
    $request->validate([
        'name'=>'required|string|max:255',
        
    ]);
    $cat=Cat::findOrFail($id);
    $cat->update([
        'name'=>$request->name,

    ]);
    return redirect(url('cats'));
}
public function delete($id){
    $cat=Cat::findOrFail($id);
    $cat->delete();
    return redirect(url('cats'));
}
}
