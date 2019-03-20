@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
    <div class="table">
        <a href="{{action('MainController@create_page')}}" class="view">Add New Category</a>
        <table>
            <tr>
                <th>S/N</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
            @php
            $i = 1;
            @endphp
            @foreach($table as $row)
            <tr>
                {{--{{$row->categoryID}}--}}
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td><a href="{{action('MainController@edit_page',['id' => $row->categoryID])}}">Edit</a>
                    <a href="{{action('MainController@del',['id' => $row->categoryID])}}" class="red">delete</a></td>
            </tr>
             @endforeach
        </table>
    </div>
@endsection