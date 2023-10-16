@extends('layouts.home')
@section('title',"today's Plan")
@section('content')
@include('sweetalert::alert')
@if(session()->has('message'))
<div class="alert alert-success">
     <button type="button" class="close" data-dismiss="alert" aria-hiden="true">x</button>
     {{session()->get('message')}}
</div>
@endif
<div class="row">
    <div class="col-10">
        <h2 class="titlealign">Plan for today</h2>
    </div>
    <div class="col-2">
        <button class="btn btn-success">Download </button>
    </div>
</div>

@if($todayPlan->isNotEmpty())
            @foreach($todayPlan as $plan)
            @if($plan->category=='Today')
                @if($plan->status=='pending')
                    <div class="containerPlan">
                        <h3>{{$plan->plan}}</h3>
                        <h4>{{$plan->description}}</h4>
                        <h5 class="desc">Category : {{$plan->category}}</h5>
                        <h5 class="desc">Target Place : {{$plan->place}}</h5>
                        <h5 >Status : {{$plan->status}}</h5>
                        <a class="btn btn-outline-warning" style="margin:0 1em" href="{{route('editPlanPage',$plan->id)}}">Edit</a>
                        <a onclick="confirmation(event)"  class="btn btn-success" style="margin:0 1em" href="{{route('planDone', $plan->id)}}">Done</a>
                        <a onclick="confirmation(event)"  class="btn btn-danger" style="margin:0 1em " href="{{route('deletePlan', $plan->id)}}">Delete</a>
                    </div>
                @else
                    <div class="containerPlan" style="background-color:rgb(8, 189, 27); opacity:0.7;">
                        <h3 style="text-decoration:line-through;color:#fff">{{$plan->plan}}</h3>
                        <h4 style="text-decoration:line-through;color:#fff">{{$plan->description}}</h4>
                        <h5 class="desc" style="color:#fff">Category : {{$plan->category}}</h5>
                        <h5 class="desc" style="color:#fff">Target Place : {{$plan->place}}</h5>
                        <h5 style="color:#fff">Status : {{$plan->status}}</h5>
                        <a class="btn btn-outline-warning disabled" style="margin:0 1em">Edit</a>
                        <a class="btn btn-success disabled" style="margin:0 1em" href="{{route('planDone', $plan->id)}}">Done</a>
                        <a  onclick="confirmation(event)"   class="btn btn-danger " style="margin:0 1em " href="{{route('deletePlan', $plan->id)}}">Delete</a>
                    </div>
                @endif
            @endif
            @endforeach
@else
    <div class="no_plan">
    <h2 style="text-align:center;">No Plan for Today</h2>
    </div>
@endif
@endsection
