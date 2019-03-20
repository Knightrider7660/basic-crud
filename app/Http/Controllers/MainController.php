<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //home page
    public function index(){
        $table = Category::orderBy('categoryID','DESC')->get();
        return view('main')->with(['table' => $table]);
    }

    //create page
    public function create_page(){
        return view('create');
    }

    //save
    public function save(Request $request){
        //dd($request->all());
        $table = new Category();
        $table->name = $request->name;
        $table->save();

        return redirect()->to('/');
    }

    //edit page
    public function edit_page($id){
        $table = Category::find($id);
        return view('edit_page')->with(['table' => $table]);
    }

    //edit category
    public function edit(Request $request){
        $table = Category::find($request->categoryID);
        $table->name = $request->name;
        $table->save();

        return redirect()->to('/');
    }
//delete category
    public function del($id){
        $table = Category::find($id);
        $table->delete();

        return redirect()->back();
    }



}
