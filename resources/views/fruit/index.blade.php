<html>
<head>
<title>
hello app
</title>
</head>
<body>
this is hello app.
<table border="1">
<tr>
	<th>name</th>
</tr>
@foreach ($items as $item)
<tr>
	<td>{{$item->name}}</td>
<tr>
@endforeach
</table></body>
</html>