@extends('admin.layouts.base')
@section('title', 'Dashboard')
@section('data-page-id', 'adminDashboard')
@section('content')
<div class="container-fluid">
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-white">
                        <span class="mini-stat-icon"><i class="ti-shopping-cart"></i></span>
                        <div class="mini-stat-info text-right text-light"><span class="counter text-white"></span> Today Entry</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-success">
                        <span class="mini-stat-icon"><i class="ti-user"></i></span>
                        <div class="mini-stat-info text-right text-light"><span class="counter text-white"></span> Total Student</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="mini-stat clearfix bg-orange">
                        <span class="mini-stat-icon"><i class="ti-user"></i></span>
                        <div class="mini-stat-info text-right text-light"><span class="counter text-white"></span> Users</div>
                    </div>
                </div>
                
            </div>

            <!-- end row -->
        </div>
        <!-- container -->
    </div>
@endsection