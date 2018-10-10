<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	Wellcome, {{ $name }}
	Please active your account : <a href="{!! url('user/activation', $link) !!}">{!! url('user/activation', $link) !!}</a>
</body>
</html>
