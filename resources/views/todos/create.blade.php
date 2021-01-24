@extends('layouts.app')

@section('title', 'Create')

@section('content')
		
		<h1 class="text-center"> Create Todos </h1>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header"></div>
					<div class="card-body">

						@if($errors->any())
							<div class="alert alert-danger">
								<ul class="list-group">
									@foreach($errors->all() as $error)
									<li class="list-group-item">{{$error}}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<form action="/store-todos" method="POST">
                           @csrf
                           <div class="form-group">
                           	<label>Name</label>
                           	<input type="text" name="name" class="form-control">
                           </div>
                           <div class="form-group">
                           	<label>Description</label>
                           	<textarea type="text" name="description" class="form-control" rows="3">
                            </textarea>
                           </div>
                           <br>
                           <button type="submit" class="btn btn-success">Create Todo</button>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection