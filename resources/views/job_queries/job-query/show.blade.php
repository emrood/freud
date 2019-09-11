@extends('backend.layouts.app')
@section('title') {{ 'View JobQuery  | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'View JobQuery #'.$jobquery->id])
@endsection

@push('before-css')

@endpush


@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                    <div class="card-body">
                        <a href="{{ url('/requetes/job-query') }}" title="Back"><button class="btn btn-warning mr-3 btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/requetes/job-query/' . $jobquery->id . '/edit') }}" title="Edit JobQuery"><button class="btn btn-primary btn-sm mr-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['requetes/jobquery', $jobquery->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete JobQuery',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $jobquery->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $jobquery->title }} </td></tr><tr><th> Description </th><td> {{ $jobquery->description }} </td></tr><tr><th> User Price </th><td> {{ $jobquery->user_price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
