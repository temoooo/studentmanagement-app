@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->phone }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection