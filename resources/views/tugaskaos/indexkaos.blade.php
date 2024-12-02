@extends('template')

@section('tulisan1', 'Data Kaos')

@section('link1')
	<a href="/kaos/tambahkaos" class="btn btn-primary"> + Tambah Kaos Baru</a>
@endsection
@section('konten')

	<br/>
	<form action="/kaos/carikaos" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Merk Kaos :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        	</div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
		</div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($kaos as $k)
		<tr>
			<td>{{ $k->merkkaos }}</td>
			<td>{{ $k->stockkaos }}</td>
			<td>
                @if($k->tersedia == 'y')
                <i class="fa-solid fa-check text-success"></i>
                @else
                <i class="fa-solid fa-minus text-danger"></i>
                @endif
            </td>

			<td>
				<a href="/kaos/editkaos/{{ $k->kodekaos }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/kaos/hapuskaos/{{ $k->kodekaos }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $kaos->currentPage() }} <br/>
	Jumlah Data : {{ $kaos->total() }} <br/>
	Data Per Halaman : {{ $kaos->perPage() }} <br/>


	{{ $kaos->links() }}


@endsection
