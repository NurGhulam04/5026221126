<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    //
    public function indexeas()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();

        $nilaikuliah = $nilaikuliah->map(function ($row) {
            $row->NilaiHuruf = $this->convertNumberToLetter($row->NilaiAngka);
            return $row;
        });

        return view('indexeas', ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambaheas()
    {

	// memanggil view tambah
	return view('tambaheas');

    }


    // method untuk insert data ke table pegawai
    public function storeeas(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'ID' => $request->ID,
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/eas');


    }

    private function convertNumberToLetter($number)
    {
        if ($number <= 40) {
            return 'D';
        } elseif ($number >= 41 && $number <= 60) {
            return 'C';
        } elseif ($number >= 61 && $number <= 80) {
            return 'B';
        } elseif ($number >= 81) {
            return 'A';
        }

        return null;
    }

}
