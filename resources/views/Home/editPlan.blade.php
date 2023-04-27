@extends('layouts.home')
@section('title','editPlan')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" arial-hidden="true">x</button>
    {{session()->get('message')}}
</div>
@endif
<div class="greeting">
    <h2>Edit Your Plan</h2>
    <p>What is in your head today...?</p>
</div>
<form action="{{route('confirmEdit',$plan->id)}}" method="post" enctype="multipart/form-data">@csrf
<div class="form">
      <div class="mb-3 mt-3">
            <label for="text" class="form-label">My Plan</label>
            <input type="text" class="form-control" id="text" placeholder="Enter a plan" name="plan" value="{{$plan->plan}}" required>
      </div>
      <div class="mb-3 mt-3">
            <label for="comment">Description</label>
            <textarea  style="color:#000"  class="form-control" rows="5" id="description" name="description" required>{{$plan->description}}</textarea>
      </div>
      <div class="mb-3">
      <label for="place">What is your target ?</label><br>
      <select class="form-select" aria-label="" name="place" required>
            <option value="{{$plan->place}}" selected>{{$plan->place}}</option>
            <option value="School">School</option>
            <option value="Family">Family</option>
            <option value="Work">Work</option>
            <option value="Spiritual">Spiritual</option></option>
            <option value="Self">Self</option>
      </select>
      </div>
      <div class="mb-3">
      <label for="duration">Duration</label><br>
       <select class="form-select" aria-label="" name="category" required >
            <option value="{{$plan->category}}" selected>{{$plan->category}}</option>
            <option value="Today">Today</option>
            <option value="This Week">This Week</option>
            <option value="This Month">This Month</option>
            <option value="This Year">This Year</option>
      </select>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
@endsection
