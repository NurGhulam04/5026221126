@extends('template')

@section('tulisan1', 'Data kaos')

@section('link1')
	<a href="/kaos" class="btn btn-primary"> Kembali</a>
@endsection
@section('konten')
	<form action="/kaos/storekaos" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="merkkaos" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merkkaos" class="form-control" id="merkkaos" required="required">
        	</div>
		</div>
		<div class="row mb-3">
            <label for="stockkaos" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="number" name="stockkaos" class="form-control" id="stockkaos" required="required">
			</div>
		</div>
		<div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_y" value="y">
                    <label class="form-check-label" for="tersedia_y">Tersedia</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_n" value="n">
                    <label class="form-check-label" for="tersedia_n">Tidak Tersedia</label>
                  </div>
			</div>
		</div>
		<div class=" row mb-3">
            <div class="col-sm-12">
				<center> <input type="submit" value="Simpan Data" class="btn btn-primary"> </center>
			</div>
		</div>

	</form>
@endsection
