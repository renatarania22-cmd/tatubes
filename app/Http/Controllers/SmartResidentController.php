<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartResidentController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        // Data dummy pengaduan warga SmartResident
        $laporanList = [
            [
                'judul' => 'Lampu Jalan Utama Rusak',
                'nama_pelapor' => 'Rania Renata',
                'kategori' => 'Infrastruktur',
                'lokasi' => 'Jl. Telekomunikasi No. 1',
                'deskripsi' => 'Lampu penerangan jalan padam sejak kemarin malam.',
                'status' => 'Proses'
            ],
            [
                'judul' => 'Penumpukan Sampah di Pos 2',
                'nama_pelapor' => 'Ahmad Warga',
                'kategori' => 'Kebersihan',
                'lokasi' => 'Area Pos Pengamanan 2',
                'deskripsi' => 'Kontainer sampah sudah penuh dan belum diangkut.',
                'status' => 'Pending'
            ],
            [
                'judul' => 'Perbaikan Pintu Pagar Komplek',
                'nama_pelapor' => 'Siti Aminah',
                'kategori' => 'Keamanan',
                'lokasi' => 'Gerbang Barat',
                'deskripsi' => 'Engsel pintu gerbang lepas.',
                'status' => 'Selesai'
            ]
        ];

        return view('laporan.index', compact('laporanList'));
    }
}