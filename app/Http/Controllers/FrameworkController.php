<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;

class FrameworkController extends Controller
{
    public function getAbout(){
        $data = [
            'judul' => 'Belajar Laravel Framework',
            'nama' => 'Benri',
            'deskripsi' => 'Website ini dibuat untuk tujuan pembelajaran dan pengembangan keterampilan dalam menggunakan Laravel dan Bootstrap.'
        ];
        return view('about', $data);
    }

    public function getMahasiswa(){
        $data = [
            'fakultas' => 'Terknologi Informasi',
            'program_studi' => 'Sistem Informasi',
            'tahun_akademik' => '2023/2024'
        ];

        //Ambil semua data dari tabel frameworks
        $mahasiswas = Framework::all();


        return view('mahasiswa', $data, compact('mahasiswas'));
    }
}
