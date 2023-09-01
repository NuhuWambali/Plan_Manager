@extends('layouts.home')
@section('title','createTimetable')
@section('content')
@include('sweetalert::alert')
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" arial-hidden="true">x</button>
    {{session()->get('message')}}
</div>
@endif
<h2 class="titlealign">Create TimeTable</h2>

<form action="{{route('createTimetable')}}" method="post">@csrf
    <div class="form">
         <div class="mb-3 mt-3">
            <label for="comment">Task</label>
            <textarea class="form-control" placeholder= "Enter a Task here" rows="5" id="description" name="task" required></textarea>
         </div>
         <select class="form-select" aria-label="Default select example" name="day" required>
            <option selected disabled>Select Day</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday" >Tuesday</option>
            <option value="Wednesfay" >Wednesday</option>
            <option value="Thursday" >Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday" >Saturday</option>
            <option value="Sunday">Sunday</option>
          </select>
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">Start time</label>
            <input type="time" class="form-control" id="text" placeholder="Enter a start time here" name="start_time" required>
         </div> <div class="mb-3 mt-3">
            <label for="text" class="form-label">End time</label>
            <input type="time" class="form-control" id="text" placeholder="Enter End time here" name="end_time" required>
         </div>
          <button type="submit" class="btn btn-success">Create</button>
    </div>
    </form>
@endsection

