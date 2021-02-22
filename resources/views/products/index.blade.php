@extends('layouts.app')

@section('title')
Products 
    
@endsection
@section('main_content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Quantity</th>
        </tr>



    </thead>




<tbody>
    @forelse ($posts as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->body}}</td>
        
</tbody>
</table>
    
@endsection