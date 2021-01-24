@extends('layouts.app')

@section('title', 'Create')

@section('content')
		
		<h1 class="text-center"> Create Todos </h1>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header"></div>
					<div class="card-body">
						<form action="/store-todos" method="POST">
                           @csrf
                           <div class="form-group">
                           	
                           </div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection