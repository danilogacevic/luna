@extends('layouts.single-tour')

@section('scripts')

<SCRIPT>
	
	$("#raspored p").addClass('add-min-top-quarter dark-grey');

	$(".list_ok p").replaceWith(function() {
    return $("<li></li>").append($(this).html());
	});

	$("ul.menu  li  a").css('color','cadetblue');
	
</SCRIPT>

@endsection