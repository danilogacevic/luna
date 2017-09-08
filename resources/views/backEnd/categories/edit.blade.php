@extends('backLayout.app')
@section('title')
Edit Category
@stop

@section('content')

    <h1>Edit Category</h1>
    <hr/>

    {!! Form::model($category, [
        'method' => 'PATCH',
        'action' => ['CategoriesController@update', $category->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('cat_title') ? 'has-error' : ''}}">
                {!! Form::label('cat_title', 'Cat Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cat_title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cat_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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