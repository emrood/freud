@if(auth()->user()->can('edit-'.$label) || auth()->user()->isAdmin())
    <a href="{{$route }}"
       class="btn btn-sm btn-secondary mb-1"><i class="fa fa-flag"></i></a>
@endif