<!DOCTYPE html>
<html>
<head>
    <title>Shark App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sharks') }}">shark Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('sharks') }}">View All sharks</a></li>
        <li><a href="{{ URL::to('sharks/create') }}">Create a shark</a>
    </ul>
</nav>

<h1>Showing {{ $shark->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $shark->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $shark->email }}<br>
            <strong>Level:</strong> {{ $shark->shark_level }}
        </p>
    </div>

</div>
</body>
</html>