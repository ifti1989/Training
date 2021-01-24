@extends('layouts.app')

@section('title', 'Todos')
@section ('content')
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						@foreach($todos as $todo)
							<li class="list-group-item">{{$todo->name}}
								<a href="/todos/{{ $todo->id}}" class="btn btn-info float-right btn-sm">View </a>
							</li>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@endsection