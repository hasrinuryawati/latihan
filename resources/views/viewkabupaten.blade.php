<!DOCTYPE html>
<html>
<head>
	<title>View Kabupaten</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Id Kabupaten</th>
		<th>Id Provinsi</th>
		<th>Nama Kabupaten</th>
	</tr>
	@foreach($kabupaten as $data)
	<tr>
		<td>{{$data->id_kabupaten}}</td>
		<td>{{$data->id_provinsi}}</td>
		<td>{{$data->nama_kabupaten}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>