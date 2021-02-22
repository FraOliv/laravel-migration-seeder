@extends('layouts.app')

@section('title')
Customers 
    
@endsection
@section('main_content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>Premium</th>
        </tr>



    </thead>




<tbody>
    @forelse ($customers as $customer)
    <tr>
       <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->firstname}}</td>
        <td>{{$customer->surname}}</td>
        <td>{{$customer->age}}</td>
        <td>{{$customer->nationality}}</td>
        <td>{{$customer->premium}}</td>
    </tr>
    </tr>
    @empty
    <tr>
        <td>no customers in here</td>
    </tr>
    @endforelse
</tbody>
</table>




@endsection