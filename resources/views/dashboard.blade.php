@extends('layouts.app')

@section('title', 'Dashboard Monitoring')

@section('content')
    <h2>Dashboard SmartResident</h2>
    <x-alert type="info" message="Sistem Layanan & Pengaduan Warga Berbasis Blade View Laravel." />

    <div style="display: flex; gap: 15px; margin-top: 20px;">
        <div class="card" style="flex: 1; text-align: center;">
            <h3>Total Laporan</h3>
            <h2>3</h2>
        </div>
        <div class="card" style="flex: 1; text-align: center;">
            <h3>Diproses</h3>
            <h2 style="color: #2563eb;">1</h2>
        </div>
        <div class="card" style="flex: 1; text-align: center;">
            <h3>Selesai</h3>
            <h2 style="color: #16a34a;">1</h2>
        </div>
    </div>
@endsection