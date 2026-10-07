@extends('layouts.app')

@section('title', 'Daftar Pengaduan Warga')

@section('content')
    <h2>Daftar Pengaduan Masuk</h2>

    <x-alert type="success" message="Data pengaduan fasilitas umum berhasil disinkronkan." />

    {{-- Directive Perulangan dan Partial View --}}
    @forelse($laporanList as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada pengaduan yang terdaftar.</p>
    @endforelse
@endsection