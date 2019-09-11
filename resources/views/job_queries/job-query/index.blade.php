@extends('backend.layouts.app')
@section('title') {{ 'Jobquery | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Jobquery'])
@endsection

@push('before-css')
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-block text-center">
                            <a href="{{ url('/requetes/job-query/create') }}" class="btn btn-success btn-sm"
                               title="Add New JobQuery">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Utilisateur</th>
                                    <th>Prix utilisateur</th>
                                    <th>Prix administrateur</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




@push('js')
    <!--This page plugins -->
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="{{asset('dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script>
        $(document).on('click', '.delete', function (e) {
            if (confirm('Are you sure want to delete?')) {
                $(this).find('form').submit();
            } else {
                e.preventDefault();
                return false;
            }
        });
        var route = '{{asset('requetes/job-query/get-data')}}';

        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            iDisplayLength: 10,
            retrieve: true,
            ajax: route,
            {{--columns: [--}}
                    {{--{data: "DT_RowIndex", name: 'DT_RowIndex',width:'10%'},--}}
                    {{--@foreach($columns as $column)--}}
                    {{--{--}}
                    {{--data: "{{$column}}", name: '{{$column}}'--}}
                    {{--},--}}
                    {{--@endforeach--}}
                    {{--{--}}
                    {{--data: "actions", name: "actions"--}}
                    {{--}--}}
                    {{--],--}}
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'description', name: 'description'},
                {data: 'user_id', name: 'user_id'},
                {data: 'user_price', name: 'user_price'},
                {data: 'admin_price', name: 'admin_price'},
                {data: 'status', name: 'status'},
                {data: 'actions', name: 'actions'}
            ],

        });
    </script>

@endpush


