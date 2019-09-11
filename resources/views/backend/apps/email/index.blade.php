@extends('backend.layouts.app')
@section('title') {{ 'Email | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
@include('backend.layouts.partials.breadcrumbs',['current' => 'Email'])
@endsection

@push('after-css')
    <!-- This Page CSS -->
    <link href="{{asset('assets/libs/summernote/dist/summernote-bs4.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Email App Part -->
        <!-- ============================================================== -->
        <div class="email-app">
            <!-- ============================================================== -->
            <!-- Left Part -->
            <!-- ============================================================== -->
            <div class="left-part bg-white">
                <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                <div class="scrollable" style="height:100%;">
                    <div class="p-15">
                        <a id="compose_mail" class="waves-effect waves-light btn btn-danger d-block" href="javascript: void(0)">Compose</a>
                    </div>
                    <div class="divider"></div>
                    <ul class="list-group">
                        <li>
                            <small class="p-15 grey-text text-lighten-1 db">Folders</small>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="active list-group-item-action"><i class="mdi mdi-inbox"></i>
                                Inbox <span class="label label-success float-right">6</span></a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-star"></i>
                                Starred </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-send"></i>
                                Draft <span class="label label-danger float-right">3</span></a></li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-email"></i>
                                Sent Mail </a>
                        </li>
                        <li class="list-group-item">
                            <hr>
                        </li>
                        <li>
                            <small class="p-15 grey-text text-lighten-1 db">Labels</small>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger mdi mdi-checkbox-blank-circle"></i>
                                Work </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-cyan mdi mdi-checkbox-blank-circle"></i>
                                Business </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning mdi mdi-checkbox-blank-circle"></i>
                                Family </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:void(0)" class="list-group-item-action"><i class="text-info mdi mdi-checkbox-blank-circle"></i>
                                Friends </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Right Part -->
            <!-- ============================================================== -->
            <div class="right-part mail-list bg-white">
                <!-- Button group part -->
                <div class="p-15 d-flex align-items-center do-block">
                    <div class="btn-group my-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input sl-all" id="cs">
                            <label class="custom-control-label" for="cs">&nbsp;</label>
                        </div>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Filter
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Action part -->
                <!-- Mail list-->
                <div class="table-responsive">
                    <table class="table email-table no-wrap table-hover v-middle">
                        <tbody>
                        <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst1">
                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Hanna Gover</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-danger m-r-10">Work</span>
                                    <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span>
                                    unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 12:30 PM </td>
                        </tr>
                        <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst2">
                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Genelia Roshan</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-info m-r-10">Business</span>
                                    <span class="blue-grey-text text-darken-4">Inquiry about license </span>for
                                    Admin Template please provide us the license detail </a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 11:30 AM </td>
                        </tr>
                        <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst3">
                                    <label class="custom-control-label" for="cst3">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name max-texts">
                                <h6 class="m-b-0">Ritesh Deshmukh</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-warning blue-grey-text text-darken-4 m-r-10">Friend</span>
                                    <span class="blue-grey-text text-darken-4">Bitbucket (commit Pushed) by
                                                    Ritesh</span>Lorem ipsum perspiciatis unde omnis iste natus error
                                    sit
                                    voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 10:30 AM </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst4">
                                    <label class="custom-control-label" for="cst4">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Akshay Kumar</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-info m-r-10">Work</span>Perspiciatis
                                    unde omnis- iste Lorem ipsum perspiciatis unde omnis iste natus error
                                    sit
                                    voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 9:30 AM </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst5">
                                    <label class="custom-control-label" for="cst5">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">John Abraham</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-success m-r-10">Work</span>
                                    Lorem ipsum perspiciatis- unde omnis iste natus error sitnatus error
                                    sit
                                    voluptatem voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 10 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst6">
                                    <label class="custom-control-label" for="cst6">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Akshay Kumar</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Lorem ipsum
                                    perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst7">
                                    <label class="custom-control-label" for="cst7">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Hanna Gover</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Unde omnis
                                    Lorem
                                    ipsum perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst8">
                                    <label class="custom-control-label" for="cst8">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Akshay Kumar</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Iste natus
                                    error
                                    sit lorem - ipsum perspiciatis unde omnis iste natus error sit
                                    voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst9">
                                    <label class="custom-control-label" for="cst9">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Hanna Gover</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"><span class="label label-primary m-r-10">Work</span>
                                    Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 12:30 PM </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst10">
                                    <label class="custom-control-label" for="cst10">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Akshay Kumar</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Lorem ipsum
                                    perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst11">
                                    <label class="custom-control-label" for="cst11">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Hanna Gover</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Unde omnis
                                    Lorem
                                    ipsum perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst12">
                                    <label class="custom-control-label" for="cst12">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/600x600?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Akshay Kumar</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)"> Iste natus
                                    error
                                    sit lorem - ipsum perspiciatis unde omnis iste natus error sit
                                    voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> Mar 09 </td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="chb">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst13">
                                    <label class="custom-control-label" for="cst13">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td class="starred"><i class="far fa-star"></i></td>
                            <!-- User -->
                            <td class="user-image"><img src="https://via.placeholder.com/52x52?text=user" alt="user"
                                                        class="rounded-circle" width="30"></td>
                            <td class="user-name">
                                <h6 class="m-b-0">Hanna Gover</h6>
                            </td>
                            <!-- Message -->
                            <td class="max-texts"> <a class="link" href="javascript: void(0)">Lorem ipsum
                                    perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                            <!-- Attachment -->
                            <td class="clip"><i class="fa fa-paperclip"></i></td>
                            <!-- Time -->
                            <td class="time"> 12:30 PM </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-15 m-t-30">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Email App Part -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection

@push('js')
    <!-- This Page JS -->
    <script src="{{asset('assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Type your email Here',
            tabsize: 2,
            height: 250
        });
        $("#dzid").dropzone({
            url: "/file/post"
        });
    </script>
@endpush