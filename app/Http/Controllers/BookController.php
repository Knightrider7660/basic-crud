<?php

namespace App\Http\Controllers;

use App\BookDetails;
use App\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //book page
    public function index(){
        $table = BookDetails::orderBy('bookID','DESC')->get();
        return view('book')->with(['table' => $table]);
    }

    //create page
    public function create_page(){
        $category = Category::orderBy('name','ASC')->get();
        return view('book_add')->with(['category'=>$category]);
    }

    //save
    public function save(Request $request){
        //dd($request->all());
        $table = new BookDetails();
        $table->categoryID = $request->categoryID;
        $table->title = $request->title;
        $table->author = $request->author;
        $table->publisher = $request->categoryID;
        $table->publish_date = $request->publish_date;
        $table->available_address = $request->available_address;
        $table->price = $request->price;
        $table->save();

        return redirect()->to('book');
    }

    //edit page
    public function edit_page($id){
        $table = BookDetails::find($id);
        $category = Category::orderBy('name','ASC')->get();
        return view('edit_book')->with(['table' => $table, 'category'=>$category]);
    }

    //edit book
    public function edit(Request $request){
        $table = BookDetails::find($request->bookID);
        $table->categoryID = $request->categoryID;
        $table->title = $request->title;
        $table->author = $request->author;
        $table->publisher = $request->categoryID;
        $table->publish_date = $request->publish_date;
        $table->available_address = $request->available_address;
        $table->price = $request->price;
        $table->save();

        return redirect()->to('book');
    }

    //delete Book
    public function del($id){
        $table = BookDetails::find($id);
        $table->delete();

        return redirect()->back();
    }
}
