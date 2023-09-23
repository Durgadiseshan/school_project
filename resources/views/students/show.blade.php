@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Roll_number : {{ $students->roll_number }}</p>
        <p class="card-text">Admission_number : {{ $students->admission_number }}</p>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Phone_number : {{ $students->phone_number }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection