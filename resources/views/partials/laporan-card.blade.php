<div class="card">
    <h3>{{ $laporan['judul'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama_pelapor'] }} ({{ $laporan['kategori'] }})</p>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Deskripsi:</strong> {{ $laporan['deskripsi'] }}</p>
    <p><strong>Status:</strong> 
        @if($laporan['status'] == 'Proses')
            <span class="status-proses">Sedang Diproses</span>
        @elseif($laporan['status'] == 'Selesai')
            <span class="status-selesai">Selesai Ditangani</span>
        @else
            <span class="status-pending">Menunggu Verifikasi</span>
        @endif
    </p>
</div>