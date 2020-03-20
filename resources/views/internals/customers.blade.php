@extends('layout')

@section('content')
    <h1>Customers</h1>

    <ul>
        <?php
        //     foreach($cus as $customer )
        //      echo '<li>'.$customer.'</li>';
        // ?> 

        @foreach($cus as $customer)
            <li>{{$customer->name}}</li>
        @endforeach
    </ul>
@endsection