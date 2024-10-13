@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">enroll_no : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">batch_id : {{ $enrollments->batch_id }}</p>
        <p class="card-text">student_id : {{ $enrollments->student_id }}</p>
        <p class="card-text">join_date : {{ $enrollments->join_date }}</p>
        <p class="card-text">fee : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection