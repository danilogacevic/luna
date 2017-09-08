@extends('layouts.index')
@section('script')




$("#bar").css({top: 195, position:'absolute'});

console.log($('#bar').position().top);

@endsection