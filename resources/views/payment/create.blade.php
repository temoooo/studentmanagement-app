@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payments </div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment No</label></br>

        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach ($enrollments as $id=>$enrollno)
          <option value="{{$id}}">{{$enrollno}}</option>
            
          @endforeach
        </select>
        {{-- <input type="text" name="name" id="name" class="form-control"></br> --}}
        <label>Paid Date</label></br>
        <input type="date" name="paid_date" id="paid_date" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop