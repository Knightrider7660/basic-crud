@extends('layouts.master')
@section('title')
    Edit Page
@endsection

@section('content')
    <div style="margin-bottom: 270px;" class="container">
        <div class="form">
            <h3>Edit Category</h3><br/>
            <form action="{{action('MainController@edit')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="categoryID" value="{{$table->categoryID}}">
                <label for="category">Category Name</label>
                <input type="text" id="category" name="name" value="{{$table->name}}" placeholder="Enter Category Name..">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection