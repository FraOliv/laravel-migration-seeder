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
    @forelse ($products as $product)
    <tr>
       <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->quantity}}</td>
    </tr>
    </tr>
    @empty
    <tr>
        <td>no posts in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection