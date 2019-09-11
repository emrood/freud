@extends('backend.layouts.main')
@section('title') {{ 'Register | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/images/placeholder/auth-bg.jpg')}}) no-repeat center center;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <span class="d-block"><img src="{{asset('assets/images/logo-icon.png')}}" alt="logo" /></span>
                    <h5 class="font-medium mb-3">Sign Up to Mendy Admin</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="text" required=" "
                                           placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="text" required=" "
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="password" required=" "
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="password" required=" "
                                           placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I agree to all <a
                                                    href="javascript:void(0)" class="link">Terms</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group text-center">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit ">SIGN
                                        UP</button>
                                </div>
                            </div>
                            <div class="row form-group mb-0 mt-2">
                                <div class="col-12 text-center ">
                                    Already have an account? <a href="{{asset('auth-login')}}" class="text-primary ml-1"><b>Sign
                                            In</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <script>
        $('[data-toggle="tooltip "]').tooltip();
        $(".preloader ").fadeOut();
    </script>
@endpush
