@component('email.contact-form')

	@slot('name')
		{{$name}}
	@endslot

	@slot('body')
		{{$body}}
	@endslot

@endcomponent