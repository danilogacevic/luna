@extends('backLayout.app')
@section('title')
Create new Post
@stop

@section('content')

    <h1>Create New Post</h1>
    <hr/>

    {!! Form::open(['method'=>'POST','url' => 'admin/posts', 'class' => 'form-horizontal','files'=>'true']) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Naslov: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                {!! Form::label('body', 'Tekst: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','Slika:',['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                
                {!! Form::file('photo_id',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('short_desc') ? 'has-error' : ''}}">
                {!! Form::label('short_desc', 'Ukratko: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('short_desc', null, ['class' => 'form-control','rows'=>'3']) !!}
                    {!! $errors->first('short_desc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : ''}}">
                {!! Form::label('categorie_id', 'Kategorija: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::select('categorie_id',[''=>'Choose Categories'] + $categories, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('categorie_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                {!! Form::label('address', 'Adresa hotela: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group {{ $errors->has('transport') ? 'has-error' : ''}}">
                {!! Form::label('transport', 'Hotel_prevoz: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('transport', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('transport', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group {{ $errors->has('whats_included') ? 'has-error' : ''}}">
                {!! Form::label('whats_included', 'Sta je ukljuceno: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('whats_included', null, ['class' => 'form-control','rows'=>'3']) !!}
                    {!! $errors->first('whats_included', '<p class="help-block">:message</p>') !!}
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
                {!! Form::label('price', 'Cijena: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('decreased_price') ? 'has-error' : ''}}">
                {!! Form::label('decrease_price', 'Snizena cijena: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('decreased_price', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('decreased_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <!-- <div class="form-group {{ $errors->has('saving') ? 'has-error' : ''}}">
                {!! Form::label('saving', 'Usteda: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('saving', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('saving', '<p class="help-block">:message</p>') !!}
                </div>
            </div> -->


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

 <!--    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif -->

@endsection

@section('scripts')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script class="">

    tinymce.init({ selector:'#body,#whats_included' });

   


</script>

@endsection