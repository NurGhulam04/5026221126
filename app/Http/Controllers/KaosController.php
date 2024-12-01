<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    //
    public function indexkaos()
    {
    	// mengambil data dari table pegawai
    	//$kaos = DB::table('pegawai')->get();//hasilnya adalah array 2d
        $kaos = DB::table('kaos')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('tugaskaos/indexkaos',['kaos' => $kaos]);

    }

    public function tambahkaos()
    {

	// memanggil view tambah
	return view('tugaskaos/tambahkaos');

    }


    // method untuk insert data ke table kaos
    public function storekaos(Request $request)
    {
        // insert data ke table kaos
        DB::table('kaos')->insert([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');


    }
    // method untuk edit data pegawai
    public function editkaos($kode)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $kaos = DB::table('kaos')->where('kodekaos',$kode)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugaskaos/editkaos',['kaos' => $kaos]);

    }

    // method untuk hapus data pegawai
    public function hapuskaos($kode)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('kaos')->where('kodekaos',$kode)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/kaos');
    }
    // update data pegawai
    public function updatekaos(Request $request)
    {
        // update data pegawai
        DB::table('kaos')->where('kodekaos',$request->kode)->update([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kaos');
    }

    public function carikaos(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kaos = DB::table('kaos')
		->where('merkkaos','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('tugaskaos/indexkaos',['kaos' => $kaos]);

	}
}
