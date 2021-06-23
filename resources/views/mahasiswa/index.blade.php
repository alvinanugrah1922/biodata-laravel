@extends('layouts.index')

@section('content')
<table class="table-beordered table">
	<tr>
		<th>nama depan</th>
		<th>nama belakang</th>
		<th>jenis kelamin</th>
		<th>agama</th>
		<th>alamat</th>
		
	</tr>
	@foreach($datas as $key=>$value)
	<tr>
		<td>{{ $vlaue->nama_depan}}</td>
		<td>{{ $vlaue->nama_belakang}}</td>
		<td>{{ $vlaue->jenis_kelamin}}</td>
		<td>{{ $vlaue->agama}}</td>
		<td>{{ $vlaue->alamat}}</td>
	</tr>
	@endforeach
</table>
@endsection