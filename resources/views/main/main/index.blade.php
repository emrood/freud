@extends('backend.layouts.app')
@section('title') {{ 'Tableau de bord | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Tableau de bord'])
@endsection

@push('after-css')
@endpush
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-gradient-primary sales-details">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-white op-7" data-feather="shield"></i>
                                        <span class="text-white op-7 d-block my-3">Profit</span>
                                        <h3 class="text-white mb-0">5,600</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i class="fas fa-caret-up text-white mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-white op-7" data-feather="user-plus"></i>
                                        <span class="text-white op-7 d-block my-3">Nouveaux utilisateurs</span>
                                        <h3 class="text-white mb-0">180</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i class="fas fa-caret-down text-white mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-white op-7" data-feather="cloud"></i>
                                        <span class="text-white op-7 d-block my-3">Profit</span>
                                        <h3 class="text-white mb-0">5,600</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i class="fas fa-caret-up text-white mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex p-3">
                                    <div>
                                        <i class="text-white op-7" data-feather="briefcase"></i>
                                        <span class="text-white op-7 d-block my-3">Nouveaux utilisateurs</span>
                                        <h3 class="text-white mb-0">180</h3>
                                    </div>
                                    <div class="ml-auto align-self-end mb-1">
                                                <span class="text-white"><i class="fas fa-caret-down text-white mr-1"></i>
                                                    2.41</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        {{--<div class="row">--}}
            {{--<div class="col-lg-7 col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<div>--}}
                                {{--<h4 class="card-title">Product Sales</h4>--}}
                                {{--<h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus--}}
                                    {{--vel--}}
                                    {{--facilisis. </h6>--}}
                            {{--</div>--}}
                            {{--<div class="ml-auto">--}}
                                {{--<div class="dropdown title-dropdown">--}}
                                    {{--<button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1"--}}
                                            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--<i data-feather="more-horizontal"></i>--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">--}}
                                        {{--<a class="dropdown-item" href="#">Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#">Delete</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="custom-input w-50 mt-3">--}}
                            {{--<input type="text" class="form-control datepicker" placeholder="Select date">--}}
                            {{--<i class="form-control-icon" data-feather="calendar"></i>--}}
                        {{--</div>--}}
                        {{--<div class="sales ct-charts mt-4"></div>--}}
                        {{--<ul class="list-inline text-center mt-4 mb-0">--}}
                            {{--<li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-info"></i>Washington</li>--}}
                            {{--<li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-purple"></i>New--}}
                                {{--York</li>--}}
                            {{--<li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-warning"></i>Nevada</li>--}}
                            {{--<li class="list-inline-item text-dark"><i class="fas fa-circle font-10 mr-2 text-danger"></i>Vermont</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-5 col-md-12">--}}
                {{--<div id="blog-carousel" class="carousel slide" data-ride="carousel">--}}
                    {{--<!-- Carousel items -->--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="active carousel-item">--}}
                            {{--<div class="overlaybg">--}}
                                {{--<img src="https://via.placeholder.com/430x514?text=Background" class="card-img-radius img-fluid"--}}
                                     {{--alt="blog">--}}
                            {{--</div>--}}
                            {{--<div class="d-flex flex-column justify-content-between card-img-overlay p-4">--}}
                                {{--<div class="author d-flex align-items-center">--}}
                                    {{--<div>--}}
                                        {{--<img src="https://via.placeholder.com/52x52?text=user" alt="user" class="rounded-circle"--}}
                                             {{--width="50">--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-3">--}}
                                                {{--<span class="text-white font-medium">Mendy Simmons--}}
                                                    {{--<span class="text-muted font-normal">/--}}
                                                        {{--Added blog post--}}
                                                    {{--</span>--}}
                                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<div class="category mb-2">--}}
                                        {{--<span class="text-muted">Travel,</span>&nbsp;--}}
                                        {{--<span class="text-muted">Life</span>--}}
                                    {{--</div>--}}
                                    {{--<h2 class="text-white font-light">Risus commodo viverra maecenas--}}
                                        {{--accumsan lacus vel facilisis.</h2>--}}
                                {{--</div>--}}
                                {{--<div class="d-flex align-items-center">--}}
                                    {{--<div>--}}
                                        {{--<button class="btn btn-rounded bg-gradient-primary text-white text-uppercase">Review</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-auto">--}}
                                        {{--<span class="text-muted">3 hours ago</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<div class="overlaybg">--}}
                                {{--<img src="https://via.placeholder.com/430x514?text=Background" class="card-img-radius img-fluid"--}}
                                     {{--alt="blog" />--}}
                            {{--</div>--}}
                            {{--<div class="d-flex flex-column justify-content-between card-img-overlay p-4">--}}
                                {{--<div class="author d-flex align-items-center">--}}
                                    {{--<div>--}}
                                        {{--<img src="https://via.placeholder.com/52x52?text=user" alt="user" class="rounded-circle"--}}
                                             {{--width="50" />--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-3">--}}
                                                {{--<span class="text-white font-medium">--}}
                                                    {{--Mendy Simmons--}}
                                                    {{--<span class="text-muted font-normal">/--}}
                                                        {{--Added blog post--}}
                                                    {{--</span>--}}
                                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<div class="category mb-2">--}}
                                        {{--<span class="text-muted">Wildlife,</span>&nbsp;--}}
                                        {{--<span class="text-muted">Ocean</span>--}}
                                    {{--</div>--}}
                                    {{--<h2 class="text-white font-light">Risus commodo viverra maecenas--}}
                                        {{--accumsan lacus vel facilisis.</h2>--}}
                                {{--</div>--}}
                                {{--<div class="d-flex align-items-center">--}}
                                    {{--<div>--}}
                                        {{--<button class="btn btn-rounded bg-gradient-primary text-white text-uppercase">Review</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-auto">--}}
                                        {{--<span class="text-muted">3 hours ago</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<div class="overlaybg">--}}
                                {{--<img src="https://via.placeholder.com/430x514?text=Background" class="card-img-radius img-fluid"--}}
                                     {{--alt="blog">--}}
                            {{--</div>--}}
                            {{--<div class="d-flex flex-column justify-content-between card-img-overlay p-4">--}}
                                {{--<div class="author d-flex align-items-center">--}}
                                    {{--<div>--}}
                                        {{--<img src="https://via.placeholder.com/52x52?text=user" alt="user" class="rounded-circle"--}}
                                             {{--width="50">--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-3">--}}
                                                {{--<span class="text-white font-medium">--}}
                                                    {{--Mendy Simmons--}}
                                                    {{--<span class="text-muted font-normal">/--}}
                                                        {{--Added blog post--}}
                                                    {{--</span>--}}
                                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="content">--}}
                                    {{--<div class="category mb-2">--}}
                                        {{--<span class="text-muted">Trekking,</span>&nbsp;--}}
                                        {{--<span class="text-muted">Mountains</span>--}}
                                    {{--</div>--}}
                                    {{--<h2 class="text-white font-light">Risus commodo viverra maecenas--}}
                                        {{--accumsan lacus vel facilisis.</h2>--}}
                                {{--</div>--}}
                                {{--<div class="d-flex align-items-center">--}}
                                    {{--<div>--}}
                                        {{--<button class="btn btn-rounded bg-gradient-primary text-white text-uppercase">Review</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="ml-auto">--}}
                                        {{--<span class="text-muted">3 hours ago</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- ============================================================== -->
        <!-- Product Sales & Blog -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- TODO & Sales -->
        <!-- ============================================================== -->
        {{--<div class="row">--}}
            {{--<!-- column -->--}}
            {{--<div class="col-lg-5 col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body border-bottom">--}}
                        {{--<h4 class="card-title">To Do List</h4>--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<div>--}}
                                {{--<h3 class="text-info font-light mb-0">5 February 2019</h3>--}}
                            {{--</div>--}}
                            {{--<div class="ml-auto">--}}
                                {{--<div class="btn-group" role="group">--}}
                                    {{--<button type="button" class="btn bg-transparent"><i data-feather="chevron-left"></i></button>--}}
                                    {{--<button type="button" class="btn bg-transparent"><i data-feather="chevron-right"></i></button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="todo-widget scrollable" style="height:317px;">--}}
                        {{--<ul class="list-task todo-list list-group m-b-0" data-role="tasklist">--}}
                            {{--<li class="list-group-item todo-item" data-role="task">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" checked class="custom-control-input" id="customCheck">--}}
                                    {{--<label class="custom-control-label todo-label" for="customCheck">--}}
                                        {{--<span class="todo-desc">Payment due: warehouse rent</span>--}}
                                        {{--<span class="delete-task float-right"><i class="text-danger"--}}
                                                                                 {{--data-feather="trash-2"></i></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="list-group-item todo-item" data-role="task">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                    {{--<label class="custom-control-label todo-label" for="customCheck1">--}}
                                        {{--<span class="todo-desc">New app test</span>--}}
                                        {{--<span class="delete-task float-right"><i class="text-danger"--}}
                                                                                 {{--data-feather="trash-2"></i></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="list-group-item todo-item" data-role="task">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="customCheck2">--}}
                                    {{--<label class="custom-control-label todo-label" for="customCheck2">--}}
                                        {{--<span class="todo-desc">Meeting with CFO</span>--}}
                                        {{--<span class="delete-task float-right"><i class="text-danger"--}}
                                                                                 {{--data-feather="trash-2"></i></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="list-group-item todo-item" data-role="task">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="customCheck3">--}}
                                    {{--<label class="custom-control-label todo-label" for="customCheck3">--}}
                                        {{--<span class="todo-desc">Payment due: bike rent</span>--}}
                                        {{--<span class="delete-task float-right"><i class="text-danger"--}}
                                                                                 {{--data-feather="trash-2"></i></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="list-group-item todo-item" data-role="task">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="customCheck4">--}}
                                    {{--<label class="custom-control-label todo-label" for="customCheck4">--}}
                                        {{--<span class="todo-desc">Meeting with purchase department 3 PM</span>--}}
                                        {{--<span class="delete-task float-right"><i class="text-danger"--}}
                                                                                 {{--data-feather="trash-2"></i></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="list-group-item todo-item" data-role="task">--}}
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="customCheck5">--}}
                                    {{--<label class="custom-control-label todo-label" for="customCheck5">--}}
                                        {{--<span class="todo-desc">Meeting with workers</span>--}}
                                        {{--<span class="delete-task float-right"><i class="text-danger"--}}
                                                                                 {{--data-feather="trash-2"></i></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="d-flex align-items-center mt-3">--}}
                            {{--<div class="custom-input w-100">--}}
                                {{--<input type="text" class="form-control" placeholder="Type Here">--}}
                            {{--</div>--}}
                            {{--<div class="ml-auto">--}}
                                {{--<button type="button" class="btn bg-transparent"><i class="text-info"--}}
                                                                                    {{--data-feather="plus-circle"></i></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-7 col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<div>--}}
                                {{--<h4 class="card-title">Product Sales</h4>--}}
                                {{--<h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus--}}
                                    {{--vel--}}
                                    {{--facilisis. </h6>--}}
                            {{--</div>--}}
                            {{--<div class="ml-auto">--}}
                                {{--<div class="dropdown title-dropdown">--}}
                                    {{--<button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd2"--}}
                                            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--<i data-feather="more-horizontal"></i>--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd2">--}}
                                        {{--<a class="dropdown-item" href="#">Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#">Delete</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="custom-input w-50 mt-3">--}}
                            {{--<input type="text" class="form-control datepicker" placeholder="Select date">--}}
                            {{--<i class="form-control-icon" data-feather="calendar"></i>--}}
                        {{--</div>--}}
                        {{--<div class="row align-items-center">--}}
                            {{--<!-- column -->--}}
                            {{--<div class="col-md-7">--}}
                                {{--<div id="campaign" class="mt-4" style="height:363px; width:100%;"></div>--}}
                            {{--</div>--}}
                            {{--<!-- column -->--}}
                            {{--<div class="col-md-5 ml-auto">--}}
                                {{--<ul class="list-style-none">--}}
                                    {{--<li><i class="fas fa-circle text-danger font-12 mr-2"></i> <span class="text-dark">Vermont</span>--}}
                                        {{--<span class="text-muted ml-1">7,32,970</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-primary font-12 mr-2"></i>--}}
                                        {{--<span class="text-dark">Arizona</span> <span class="text-muted ml-1">3,24,520</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-purple font-12 mr-2"></i>--}}
                                        {{--<span class="text-dark">New York</span> <span class="text-muted ml-1">7,87,210</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-info font-12 mr-2"></i> <span--}}
                                                {{--class="text-dark">Washington</span>--}}
                                        {{--<span class="text-muted ml-1">2,27,631</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-success font-12 mr-2"></i>--}}
                                        {{--<span class="text-dark">Illinois</span> <span class="text-muted ml-1">5,74,351</span></li>--}}
                                    {{--<li class="mt-4"><i class="fas fa-circle text-warning font-12 mr-2"></i>--}}
                                        {{--<span class="text-dark">Nevada</span> <span class="text-muted ml-1">6,98,176</span></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- column -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- ============================================================== -->
        <!-- TODO & Sales -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        {{--<div class="row">--}}
            {{--<!-- column -->--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<div>--}}
                                {{--<h4 class="card-title">Top 10 Best Performers</h4>--}}
                                {{--<h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus--}}
                                    {{--vel--}}
                                    {{--facilisis. </h6>--}}
                            {{--</div>--}}
                            {{--<div class="ml-auto">--}}
                                {{--<div class="dropdown title-dropdown">--}}
                                    {{--<button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd3"--}}
                                            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--<i data-feather="more-horizontal"></i>--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd3">--}}
                                        {{--<a class="dropdown-item" href="#">Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#">Delete</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-block d-md-flex align-items-center">--}}
                            {{--<div class="custom-input icon-left w-100 w-md-25 mr-3 mt-3">--}}
                                {{--<input type="text" class="form-control" placeholder="Search...">--}}
                                {{--<i class="form-control-icon" data-feather="search"></i>--}}
                            {{--</div>--}}
                            {{--<div class="custom-input icon-left w-100 w-md-25 mt-3">--}}
                                {{--<select class="custom-select form-control">--}}
                                    {{--<option selected>Select One</option>--}}
                                    {{--<option value="1">One</option>--}}
                                    {{--<option value="2">Two</option>--}}
                                    {{--<option value="3">Three</option>--}}
                                {{--</select>--}}
                                {{--<i class="form-control-icon" data-feather="filter"></i>--}}
                            {{--</div>--}}
                            {{--<div class="custom-input ml-auto w-100 w-md-25 mt-3">--}}
                                {{--<input type="text" class="form-control datepicker" placeholder="Select date">--}}
                                {{--<i class="form-control-icon" data-feather="calendar"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="table-responsive mt-3">--}}
                            {{--<table class="table no-wrap v-middle">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th class="border-0 text-muted">Name</th>--}}
                                    {{--<th class="border-0 text-muted">Products</th>--}}
                                    {{--<th class="border-0 text-muted">Status</th>--}}
                                    {{--<th class="border-0 text-muted">Branch</th>--}}
                                    {{--<th class="border-0 text-muted">Sales</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="d-flex align-items-center">--}}
                                            {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
                                                 {{--width="40" />--}}
                                            {{--<div class="ml-2">--}}
                                                {{--<span class="text-dark">Mark Freeman</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="popover-product">--}}
                                                        {{--<span class="popover-item">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<span class="popover-item item-2">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<span class="popover-item item-3">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<a class="more-product" href="#"><span class="badge badge-pill badge-light font-12">+3--}}
                                                                {{--More</span></a>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-dark">Rockford, Illinois</td>--}}
                                    {{--<td class="text-dark">180</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="d-flex align-items-center">--}}
                                            {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
                                                 {{--width="40" />--}}
                                            {{--<div class="ml-2">--}}
                                                {{--<span class="text-dark">Mark Freeman</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="popover-product">--}}
                                                        {{--<span class="popover-item">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<span class="popover-item item-2">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<span class="badge badge-pill badge-warning font-medium font-14 text-white">Overdue</span>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-dark">Rockford, Illinois</td>--}}
                                    {{--<td class="text-dark">180</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="d-flex align-items-center">--}}
                                            {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
                                                 {{--width="40" />--}}
                                            {{--<div class="ml-2">--}}
                                                {{--<span class="text-dark">Mark Freeman</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="popover-product">--}}
                                                        {{--<span class="popover-item">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-dark">Rockford, Illinois</td>--}}
                                    {{--<td class="text-dark">180</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="d-flex align-items-center">--}}
                                            {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
                                                 {{--width="40" />--}}
                                            {{--<div class="ml-2">--}}
                                                {{--<span class="text-dark">Mark Freeman</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="popover-product">--}}
                                                        {{--<span class="popover-item">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<span class="popover-item item-2">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<span class="popover-item item-3">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<a class="more-product" href="#"><span class="badge badge-pill badge-light font-12">+5--}}
                                                                {{--More</span></a>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-dark">Rockford, Illinois</td>--}}
                                    {{--<td class="text-dark">180</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="d-flex align-items-center">--}}
                                            {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
                                                 {{--width="40" />--}}
                                            {{--<div class="ml-2">--}}
                                                {{--<span class="text-dark">Mark Freeman</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="popover-product">--}}
                                                        {{--<span class="popover-item">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<span class="badge badge-pill badge-warning font-medium font-14 text-white">Overdue</span>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-dark">Rockford, Illinois</td>--}}
                                    {{--<td class="text-dark">180</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="d-flex align-items-center">--}}
                                            {{--<img src="https://via.placeholder.com/600x600?text=user" alt="user" class="rounded-circle"--}}
                                                 {{--width="40" />--}}
                                            {{--<div class="ml-2">--}}
                                                {{--<span class="text-dark">Mark Freeman</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<div class="popover-product">--}}
                                                        {{--<span class="popover-item">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                            {{--<span class="popover-item item-2">--}}
                                                            {{--<img src="https://via.placeholder.com/71x40?text=product" alt="product" />--}}
                                                        {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<span class="badge badge-pill badge-success font-medium font-14 text-white">Paid</span>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-dark">Rockford, Illinois</td>--}}
                                    {{--<td class="text-dark">180</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
    </div>
@endsection
@push('js')
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 charts -->
    <script src="{{asset('assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboards/dashboard1.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush