@extends('layouts.app')

@section('title', 'Todos')
@section ('content')
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						@foreach($todos as $todo)
							<li class="list-group-item">{{$todo->name}}
								<a href="/todos/{{ $todo->id}}" class="btn btn-info btn-sm float-right my-1">View </a>

								@if(!$todo->completed)
								<a href="/todos/{{$todo->id}}/completed" class="btn btn-warning btn-sm float-right">Completed</a>
								@endif
							</li>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@endsection