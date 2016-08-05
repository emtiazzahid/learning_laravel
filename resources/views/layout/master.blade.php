<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
	@yield('styles')
</head>
<body>
	@yield('content')
</body>
</html>