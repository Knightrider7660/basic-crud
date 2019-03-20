@extends('layouts.master')
@section('title')
    Book
@endsection

@section('content')
    <div class="table">
        <a href="{{action('BookController@create_page')}}" class="view">Add New Book</a>
        <table>
            <tr>
                <th>S/N</th>
                <th>Type</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publish</th>
                <th>Av. Add.</th>
                <th>publisher</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach($table as $row)
                <tr>
                    {{--{{$row->bookID}}--}}
                    <td>{{$i++}}</td>
                    <td>{{$row->category['name']}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->author}}</td>
                    <td>{{$row->publish_date}}</td>
                    <td>{{$row->available_address}}</td>
                    <td>{{$row->publisher}}</td>
                    <td>{{$row->price}}</td>
                    <td><a href="{{action('BookController@edit_page',['id' => $row->bookID])}}">Edit</a>
                        <a href="{{action('BookController@del',['id' => $row->bookID])}}" class="red">delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection