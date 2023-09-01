@extends('layouts.home')
@section('title','Dashboard')
@section('content')
@include('sweetalert::alert')
@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {{session()->get('message')}}
</div>
@endif
<div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-megna"></i>
                                <div class="bodystate">
                                    <h4>{{$allPlans->count()}}</h4>
                                    <span class="text-muted">Total Plans</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-megna"></i>
                                <div class="bodystate">
                                    <h4>{{$countToday}}</h4>
                                    <span class="text-muted">Today's Plan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                        <h4>{{$countThisWeek}}</h4>
                                 <span class="text-muted">This week</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-megna"></i>
                                <div class="bodystate">
                                    <h4>{{$countThisMonth}}</h4>
                                    <span class="text-muted">This Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                    <h4>{{$countThisYear}}</h4>
                                    <span class="text-muted">This Year</span>
                                </div>
                            </div>
                        </div>
                    </div>
   </div>
@endsection
