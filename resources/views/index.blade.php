@extends('template')

@section('title','Hello World')

@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Hello {{$name}}</h1>
					<h1>{{$age}}</h1>
					<a href="{{url('home')}}" class="btn btn-primary">Home</a>
				</div>
			</div>
		</div>
@endsection

@section('footer')
<center><div>hathaichanok@2017</div></center>
@endsection