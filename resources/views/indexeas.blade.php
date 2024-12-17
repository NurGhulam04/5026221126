@extends('template')

@section('tulisan1', 'EAS')

@section('link1')
	<a href="/eas/tambaheas" class="btn btn-primary">Tambah Data</a>
@endsection
@section('konten')

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>{{ $n->NilaiHuruf }}</td>
            <td>{{ $n->NilaiAngka * $n->SKS}}</td>

		</tr>
		@endforeach
	</table>

    <br/>


@endsection
