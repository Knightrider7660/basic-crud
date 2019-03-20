@extends('layouts.master')
@section('title')
    Add Book
@endsection

@section('content')
    <div class="container">
        <div class="form">
            <h3>Add Book</h3><br/>
            <form action="{{action('BookController@save')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="categoryID">Category</label>
                <select id="categoryID" name="categoryID" required>
                    <option value="">Select a Category</option>
                    @foreach($category as $row)
                        <option value="{{$row->categoryID}}">{{$row->name}}</option>
                    @endforeach
                </select>
                <label for="title">Name</label>
                <input type="text" id="title" name="title" placeholder="Enter the name of book.." required>

                <label for="author">Author</label>
                <input type="text" id="author" name="author" placeholder="Enter the author name.." required>

                <label for="publisher">Publisher</label>
                <input type="text" id="publisher" name="publisher" placeholder="Enter the publisher..">

                <label for="publish_date">Publish Date</label>
                <input type="date" id="publish_date" name="publish_date" required>

                <label for="available_address">Available Address</label>
                <textarea type="date" id="available_address" name="available_address" rows="4"></textarea>

                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="0" min="0" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection