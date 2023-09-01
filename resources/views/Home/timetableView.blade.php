@extends('layouts.home')
@section('title','view Timetable')
@section('content')
@include('sweetalert::alert')
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" arial-hidden="true">x</button>
    {{session()->get('message')}}
</div>
@endif

@if($taskAdded->count())
<h2 class="titlealign">My Timetable</h2>
<table class="table">
    <thead>
      <tr>
            <th scope="col">Day</th>
            <th scope="col">Task</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">Duration (in minutes)</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($taskAdded as $taskAdded )
        <tr>
        <td>{{$taskAdded->day}}</td>
        <td>{{$taskAdded->task}}</td>
        <td>{{$taskAdded->start_time}}</td>
        <td>{{$taskAdded->end_time}}</td>
        <td>{{$taskAdded->duration}} minutes</td>
        <td> <a onclick="confirmation(event)"  class="btn btn-danger" href="{{route('deleteTask',$taskAdded->id)}}" style="margin:0 1em">Delete</a></td>
        </tr>
        @endforeach

    </tbody>
  </table>
@else
        <div class="no_plan">
        <h2 style="text-align:center;">No Time Table Set</h2>
        </div>
@endif
@endsection
