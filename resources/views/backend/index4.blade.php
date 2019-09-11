@extends('backend.layouts.app')

@section('title') {{ 'Dashboard 4 | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs-2',['current' => 'Dashboard 4'])
@endsection

@push('before-css')
    <link href="{{asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
@endpush

@push('after-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid negative-margin">
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="d-block text-dark op-7 font-medium">Profit</span>
                                <h3 class="mb-0">5,600</h3>
                            </div>
                            <div class="round round-purple ml-auto"><i data-feather="shield"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="d-block text-dark op-7 font-medium">New Customers</span>
                                <h3 class="mb-0">180</h3>
                            </div>
                            <div class="round round-primary ml-auto"><i data-feather="user-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="d-block text-dark op-7 font-medium">Profit</span>
                                <h3 class="mb-0">5,600</h3>
                            </div>
                            <div class="round round-info ml-auto"><i data-feather="cloud"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="d-block text-dark op-7 font-medium">New Customers</span>
                                <h3 class="mb-0">180</h3>
                            </div>
                            <div class="round round-danger ml-auto"><i data-feather="briefcase"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Download and Bandwidth -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-3 align-self-center">
                                <h1 class="text-primary"><i class="ti-pie-chart"></i></h1>
                            </div>
                            <div>
                                <h4 class="card-title">Bandwidth Usage</h4>
                                <h6 class="card-subtitle mb-0">March 2019</h6>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 align-self-end">
                                <h2>350<span class="font-18 font-normal">GB</span></h2>
                            </div>
                            <div class="col-8 p-t-10 p-b-20 align-self-center">
                                <div class="usage-2 chartist-chart" style="height:65px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-3 align-self-center">
                                <h1 class="text-purple"><i class="icon-cloud-download"></i></h1>
                            </div>
                            <div>
                                <h4 class="card-title">Download Count</h4>
                                <h6 class="card-subtitle mb-0">March 2019</h6>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 align-self-end">
                                <h2>35487</h2>
                            </div>
                            <div class="col-8 p-t-10 p-b-20 text-right">
                                <div class="spark-count" style="height:65px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Top Sale Contributions</h4>
                        <h6 class="card-subtitle mb-0">Risus commodo viverra maecena</h6>
                        <div id="usa" class="my-4" style="height: 255px"></div>
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-circle text-primary font-12 mr-2 mt-1"></i>
                                    <div>
                                        <h6 class="text-muted mb-0">Wyoming</h6>
                                        <h3 class="mb-0">3234</h3>
                                        <span class="font-normal">($3,549.54)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-circle text-info font-12 mr-2 mt-1"></i>
                                    <div>
                                        <h6 class="text-muted mb-0">Texas</h6>
                                        <h3 class="mb-0">1265</h3>
                                        <span class="font-normal">($3,549.54)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-circle text-danger font-12 mr-2 mt-1"></i>
                                    <div>
                                        <h6 class="text-muted mb-0">Illinois</h6>
                                        <h3 class="mb-0">4367</h3>
                                        <span class="font-normal">($3,549.54)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Download and Bandwidth -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="d-block d-md-flex align-items-center pb-4">
                            <div>
                                <h4 class="card-title">Top selling products</h4>
                                <h6 class="card-subtitle mb-0">Risus commodo viverra maecenas</h6>
                            </div>
                            <div class="ml-auto">
                                <div class="custom-input mt-3 mt-md-0">
                                    <input type="text" class="form-control datepicker" placeholder="Select date">
                                    <i class="form-control-icon" data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive products">
                    <table class="table table-borderless v-middle no-wrap">
                        <thead>
                        <tr class="bg-light">
                            <th>Products</th>
                            <th>License</th>
                            <th>Support Agent</th>
                            <th>Technology</th>
                            <th class="text-center">Tickets</th>
                            <th class="text-center">Sales</th>
                            <th class="text-center">Earnings</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="round round-purple"></div>
                                    <div class="ml-3">
                                        <h6 class="mb-0">Elite Admin</h6>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-dark font-14">Single Use</span></td>
                            <td><span>John Doe</span></td>
                            <td><span class="label label-rounded label-purple">Angular</span></td>
                            <td class="text-center">46</td>
                            <td class="text-center">356</td>
                            <td class="text-center">
                                <h6 class="mb-0">$2850.50</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="round round-info"></div>
                                    <div class="ml-3">
                                        <h6 class="mb-0">Monster Admin</h6>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-dark font-14">Single Use</span></td>
                            <td><span>Venessa Fern</span></td>
                            <td><span class="label label-rounded label-info">Vue.js</span></td>
                            <td class="text-center">32</td>
                            <td class="text-center">324</td>
                            <td class="text-center">
                                <h6 class="mb-0">$3256.50</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="round round-primary"></div>
                                    <div class="ml-3">
                                        <h6 class="mb-0">Material Admin</h6>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-dark font-14">Multiple Use</span></td>
                            <td><span>Patrick</span></td>
                            <td><span class="label label-rounded label-primary">Bootstrap</span></td>
                            <td class="text-center">39</td>
                            <td class="text-center">458</td>
                            <td class="text-center">
                                <h6 class="mb-0">$2896</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="round round-danger"></div>
                                    <div class="ml-3">
                                        <h6 class="mb-0">Ample Admin</h6>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-dark font-14">Extended Use</span></td>
                            <td><span>John Doe</span></td>
                            <td><span class="label label-rounded label-danger">React Js</span></td>
                            <td class="text-center">78</td>
                            <td class="text-center">421</td>
                            <td class="text-center">
                                <h6 class="mb-0">$4579</h6>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{asset('assets/images/big/card-bg.jpg')}}" class="card-img-top" alt="card-bg">
                    <div class="card-body text-center">
                        <div class="mb-4 negative-margin">
                            <img src="https://via.placeholder.com/600x600?text=User" width="130" class="rounded-circle" alt="user">
                            <h4 class="mt-3 mb-0">Noah Wright</h4>
                        </div>
                        <span class="label label-rounded text-muted">Cyborg</span>
                        <span class="label label-rounded text-muted">Spaceman</span>
                        <span class="label label-rounded text-white bg-gradient-primary" data-toggle="tooltip"
                              data-placement="top" title="" data-original-title="3 more">+3</span>
                    </div>
                    <div class="border-top mt-2">
                        <div class="row text-center">
                            <div class="col-6 border-right py-3">
                                <a href="#"
                                   class="d-flex align-items-center text-muted justify-content-center font-medium"><i
                                            data-feather="message-square" class="mr-2"></i><span class="text-dark">Message</span></a>
                            </div>
                            <div class="col-6 py-3">
                                <a href="#"
                                   class="d-flex align-items-center text-muted justify-content-center font-medium"><i
                                            data-feather="user" class="mr-2"></i><span class="text-dark">Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="card bg-gradient-primary oh">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title text-white mb-0">People You May Know</h4>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-white op-5 dropdown-toggle" type="button"
                                            id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-input icon-left mt-3">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="form-control-icon" data-feather="search"></i>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="social-widget d-flex">
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Pete Mason</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Nicole Madinson</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Noah Wright</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Tom Muffy</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Kevin Osborn</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Peter Russo</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Nolan Avison</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                            <div class="social-user">
                                <img src="https://via.placeholder.com/600x600?text=User" width="115" class="rounded-circle"
                                     alt="user">
                                <h6 class="mt-3 mb-0">Rence Sones</h6>
                                <button type="button" class="btn btn-rounded btn-outline-primary-gradient mt-2">
                                    Connect
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection
@push('js')
    <!--This page JavaScript -->
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js')}}"></script>
    <!--chartist chart-->
    <script src="{{asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboards/dashboard4.js')}}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush
