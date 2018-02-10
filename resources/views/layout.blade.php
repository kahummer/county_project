<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kwale County</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{URL::to('project')}}">View all Projects</a>
			<a class="navbar-brand" href="{{URL::to('/create')}}"> Create a project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>
      <!-- <li><a href="/home">Home</a></li> -->
      <li><a href="{{URL::to('/create')}}">Register</a></li>
      <li><a href="#">Reports</a></li>
    </ul>
  </div>
</nav>
		<div class="container">
			<!-- to display content -->
			@yield('content')
			</div>

</body>
</html>
