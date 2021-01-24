<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield ('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container bg-info">
		<div class="row">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Todo App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/todos">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/new-todos">Create New</a>
      </li>
    </ul>
  </div>
</nav>
	<h2 class="text-center">Todos Page Data Show</h2>
	<div class="container">
			@yield ('content')


	</div>
	</div>
	</div>
</body>
</html>