@extends('template')

@section('title','Hello World')

@section('content')
		<h1>Hello World {{$name}} {{$coe}}</h1>
@endsection

@section('footer')
<div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
@2017
@endsection