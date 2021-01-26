@extends('layouts.app')

@section('title', 'single todo')
@section('content')
		<h1 class="text-center">{{$todo->name}}</h1>

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						Details
					</div>
					<div class="card-body">
						{{ $todo->description}}
					</div>
				</div>
				<a href="/todos/{{$todo->id}}/edit" class="btn btn-success">Edit</a>
				<a href="/todos/{{$todo->id}}/delete" class="btn btn-danger">Delete</a>
			</div>
		</div>
@endsection