@extends('backend.layouts.app')
@section('title') {{ 'Edit JobQuery | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Edit JobQuery #'.$jobquery->id ])
@endsection

@push('before-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($jobquery, [
                            'method' => 'PATCH',
                            'url' => ['/requetes/job-query', $jobquery->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('job_queries.job-query.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('assets/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        jQuery('#datetimepicker').datepicker({
            todayHighlight: true
        });
    </script>
@endpush
