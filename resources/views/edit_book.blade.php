@extends('layouts.master')
@section('title')
    Edit Book
@endsection

@section('content')
    <div class="container">
        <div class="form">
            <h3>Edit Book</h3><br/>
            <form action="{{action('BookController@edit')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="bookID" value="{{$table->bookID}}">
                <label for="categoryID">Category</label>
                <select id="categoryID" name="categoryID">
                    <option value="">Select a Category</option>
                    @foreach($category as $row)
                        <option value="{{$row->categoryID}}" @if($table->categoryID ==$row->categoryID) selected @endif >{{$row->name}}</option>
                    @endforeach
                </select>
                <label for="title">Name</label>
                <input type="text" id="title" name="title" value="{{$table->title}}" placeholder="Enter the name of book..">

                <label for="author">Author</label>
                <input type="text" id="author" name="author" value="{{$table->author}}" placeholder="Enter the author name..">

                <label for="publisher">Publisher</label>
                <input type="text" id="publisher" name="publisher" value="{{$table->publisher}}" placeholder="Enter the publisher..">

                <label for="publish_date">Publish Date</label>
                <input type="date" id="publish_date" value="{{$table->publish_date}}" name="publish_date" required>

                <label for="available_address">Available Address</label>
                <textarea type="date" id="available_address" name="available_address" rows="4">{{$table->available_address}}</textarea>

                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{$table->price}}" min="0" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection