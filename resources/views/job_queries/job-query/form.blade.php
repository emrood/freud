<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('job_date') ? 'has-error' : ''}}">
 {!! Form::label('job_date', 'Date', ['class' => 'control-label']) !!}
 {!! Form::text('job_date', null, ('' == 'required') ? ['class' => 'form-control', 'id'=>'datetimepicker', 'required' => 'required'] : ['class' => 'form-control',  'id'=>'datetimepicker']) !!}
 {!! $errors->first('job_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_price') ? 'has-error' : ''}}">
    {!! Form::label('user_price', 'User Price', ['class' => 'control-label']) !!}
    {!! Form::number('user_price', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('user_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('admin_price') ? 'has-error' : ''}}">
    {!! Form::label('admin_price', 'Admin Price', ['class' => 'control-label']) !!}
    {!! Form::number('admin_price', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('admin_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
    {!! Form::select('status', ['draft' => 'draft', 'open' => 'open', 'taken' => 'taken', 'canceled' => 'canceled'], null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
 <a href="{{ url('/%%routeGroup%%%%viewName%%') }}" title="Back"><button class="btn btn-danger btn-sm mr-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary btn-sm']) !!}
</div>
