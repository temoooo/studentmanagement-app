@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input required type="text" name="name" id="name" class="form-control"></br>
        <label>course </label></br>
<select name="course_id" id="course_id" class="form-control">
  @foreach ($courses as $id=>$name)
  <option value="{{$id}}">{{$name}}</option>
    
  @endforeach
</select>


        {{-- <input required type="text" name="course_id" id="course_id" class="form-control"></br> --}}
        <label>Start date</label></br>
        <input required type="date" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop