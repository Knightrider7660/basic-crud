@extends('layouts.master')
@section('title')
    Create Page
@endsection

@section('content')
    <div style="margin-bottom: 270px;" class="container">
        <div class="form">
            <h3>Add Category</h3><br/>
            <form action="{{action('MainController@save')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="category">Category Name</label>
                <input type="text" id="category" name="name" placeholder="Enter Category Name..">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection