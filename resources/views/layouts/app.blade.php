<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SmartResident</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f4f6f9; }
        header { background: #1e293b; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: white; margin-left: 15px; text-decoration: none; font-weight: bold; }
        .container { max-width: 1000px; margin: 30px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .card { border: 1px solid #e2e8f0; padding: 15px; margin-bottom: 15px; border-radius: 6px; }
        .status-pending { color: #d97706; font-weight: bold; }
        .status-proses { color: #2563eb; font-weight: bold; }
        .status-selesai { color: #16a34a; font-weight: bold; }
        footer { text-align: center; padding: 15px; color: #64748b; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <h2>SmartResident Kiosk & Monitoring</h2>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('laporan.index') }}">Daftar Pengaduan</a>
        </nav>
    </header>

    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <p>&copy; 2026 SmartResident System - Fakultas Ilmu Terapan Telkom University</p>
    </footer>
</body>
</html>