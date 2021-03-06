@extends('backend.layouts.app')
@section('title') {{ 'Radio-Checkboxes | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Radio-Checkboxes'])
@endsection

@push('after-css')
    <!-- This Page CSS -->
@endpush
@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <h4 class="card-title">Simple Checkboxes</h4>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Default Checkbox</h4>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" value=""> I am unchecked Checkbox
                            </label>
                        </fieldset>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" value="" checked> I am checked Checkbox
                            </label>
                        </fieldset>
                        <fieldset class="checkbox disabled">
                            <label>
                                <input type="checkbox" value="" disabled> I am disabled Checkbox
                            </label>
                        </fieldset>
                        <fieldset class="checkbox disabled">
                            <label>
                                <input type="checkbox" value="" disabled checked> I am checked &amp; disabled
                                Checkbox
                            </label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Custom Checkbox</h4>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">I am unchecked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                            <label class="custom-control-label" for="customCheck2">I am checked Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" disabled>
                            <label class="custom-control-label" for="customCheck3">I am disabled Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" disabled
                                   checked>
                            <label class="custom-control-label" for="customCheck4">I am disabled Checkbox</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title m-t-40">Simple Radio Buttons</h4>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Default Radio Buttons</h4>
                        <fieldset class="radio">
                            <label for="radio1">
                                <input type="radio" id="radio1" name="radio" value=""> I am unchecked Radio
                                Button
                            </label>
                        </fieldset>
                        <fieldset class="radio">
                            <label>
                                <input type="radio" name="radio" value="" checked> I am checked Radio Button
                            </label>
                        </fieldset>
                        <fieldset class="radio disabled">
                            <label>
                                <input type="radio" name="radio" value="" disabled> I am disabled Radio Button
                            </label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Custom Radio Buttons</h4>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"
                                   checked>
                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom
                                radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input"
                                   disabled>
                            <label class="custom-control-label" for="customRadio3">Or toggle this other custom
                                radio</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
@endpush
