<!DOCTYPE html>
<html>
<head>
	<title>View Provinsi</title>
</head>
<body>
<a href="{{url('viewkabupaten')}}">Data Kabpupaten</a>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama Provinsi</th>
			<th>Aksi</th>
		</tr>
		@foreach($provinsi as $data)
		
		<tr>
			<td>{{$data->id_provinsi}}</td>
			<td>{{$data->nama_prov}}</td>
			<td><a href="{{url('')}}"></a></td>
		</tr>

		@endforeach
	</table>
</body>
</html>