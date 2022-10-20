<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>
gijiroku shokai
</title>
</head>
<body>
<div class="container-sm">
<h1>議事録.
<table border="1" class="table h1 table-striped table-success table-hover">
<tr>
	<th>sakusei-ymd</th>
	<th>naiyo</th>
</tr>
@foreach ($items as $item)
<tr>
	<td>{{$item->sakuseiymd}}</td>
	<td>{{$item->naiyo}}</td>
<tr>
@endforeach
</table>
a</h1>
</div>
</body>
</html>