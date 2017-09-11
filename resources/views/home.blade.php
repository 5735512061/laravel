@extends('template')

@section('title','Hello World')

@section('content')
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<h1>Hello World {{$name}}</h1>
					<h3>Input Name</h3>
					<form method="post" action="{{ url('index') }}">
						{{ csrf_field() }}
						<input type="text" name="name" value="{{ old('name') }}" class="form-control">
					<h3>Input Age</h3>
						<input type="number" name="age" value="{{ old('age') }}" class="form-control"><br>
						<input type="submit" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
		
@endsection

@section('footer')
<center><div>hathaichanok@2017</div></center>
@endsection