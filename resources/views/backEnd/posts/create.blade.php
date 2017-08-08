@extends('backLayout.app')
@section('title')
Create new Post
@stop

@section('content')

    <h1>Create New Post</h1>
    <hr/>

    {!! Form::open(['method'=>'POST','url' => 'admin/posts', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                {!! Form::label('body', 'Body: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('short_desc') ? 'has-error' : ''}}">
                {!! Form::label('short_desc', 'Short Desc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('short_desc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('short_desc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : ''}}">
                {!! Form::label('cat_id', 'Cat Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::select('cat_id',[''=>'Choose Categories'] + $categories, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cat_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::select('status',[''=>'Choose status','top_rated'=>'Top rated','popular'=>'Popular'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                {!! Form::label('price', 'Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('decrease_price') ? 'has-error' : ''}}">
                {!! Form::label('decrease_price', 'Decrease Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('decreased_price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('decreased_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('saving') ? 'has-error' : ''}}">
                {!! Form::label('saving', 'Saving: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::number('saving', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('saving', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection