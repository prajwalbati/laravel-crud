<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
@include('shared.header')
@yield('content')
@include('shared.footer')
</body>
</html>