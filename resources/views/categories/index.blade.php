@extends('layouts.app')

@section('title')
categories 
    
@endsection
@section('main_content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
        </tr>



    </thead>




<tbody>
    @forelse ($categories as $category)
    <tr>
       <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->type}}</td>
    </tr>
    </tr>
    @empty
    <tr>
        <td>no categories in here</td>
    </tr>
    @endforelse
</tbody>
</table>




@endsection