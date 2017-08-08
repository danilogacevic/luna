@extends('backLayout.app')
@section('title')
Create new Category
@stop

@section('content')

    <h1>Create New Category</h1>
    <hr/>

    {!! Form::open(['method'=>'POST','url' => 'admin/categories', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('cat_title') ? 'has-error' : ''}}">
                {!! Form::label('cat_title', 'Cat Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cat_title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cat_title', '<p class="help-block">:message</p>') !!}
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