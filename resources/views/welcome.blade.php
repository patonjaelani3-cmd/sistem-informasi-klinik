<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Klinik Sehat</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
            color: #1e293b;
        }

        .sidebar {
            position: fixed;
            width: 250px;
            height: 100vh;
            padding: 28px 18px;
            background: #0f766e;
            color: white;
        }

        .brand {
            margin-bottom: 35px;
            font-size: 22px;
            font-weight: bold;
        }

        .brand small {
            display: block;
            margin-top: 8px;
            font-size: 12px;
            font-weight: normal;
            color: #ccfbf1;
        }

        .sidebar a {
            display: block;
            padding: 14px;
            margin-bottom: 8px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #115e59;
        }

        .main {
            margin-left: 250px;
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 28px;
        }

        .header p {
            margin-top: 8px;
            color: #64748b;
        }

        .admin {
            padding: 13px 18px;
            background: white;
            border-radius: 10px;
            font-weight: bold;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }

        .card {
            padding: 25px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 4px 15px #0f172a0b;
            border-top: 4px solid #0f766e;
        }

        .card p {
            color: #64748b;
            font-size: 14px;
        }

        .card h2 {
            margin-top: 16px;
            font-size: 34px;
            color: #0f766e;
        }

        .panel {
            padding: 25px;
            margin-bottom: 25px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 4px 15px #0f172a0b;
        }

        .panel h2 {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .menu-cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .menu-card {
            display: block;
            padding: 22px;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            text-decoration: none;
            color: #1e293b;
            transition: 0.2s;
        }

        .menu-card:hover {
            border-color: #0f766e;
            transform: translateY(-3px);
        }

        .menu-card .icon {
            display: block;
            margin-bottom: 12px;
            font-size: 30px;
        }

        .menu-card h3 {
            margin-bottom: 8px;
            color: #0f766e;
        }

        .menu-card p {
            color: #64748b;
            font-size: 13px;
            line-height: 1.5;
        }

        .info {
            padding: 16px;
            background: #ccfbf1;
            border-radius: 9px;
            color: #115e59;
            line-height: 1.7;
        }

        .footer {
            padding: 20px 0;
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }

        @media (max-width: 1000px) {
            .cards,
            .menu-cards {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 650px) {
            .sidebar {
                position: static;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
                padding: 18px;
            }

            .header {
                align-items: flex-start;
                flex-direction: column;
            }

            .cards,
            .menu-cards {
                grid-template-columns: 1fr;
            }
        }
        /* BACKGROUND DASHBOARD */
body {
    background: linear-gradient(135deg, #d9f3e8, #e0edff, #f0e7ff);
    color: #172b43;
}

/* KARTU TOTAL DATA */
.card {
    background: linear-gradient(135deg, #ffffff, #d9f7e9);
    border: 1px solid #b7e8d1;
    border-top: 4px solid #10b981;
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.12);
}

/* ANGKA STATISTIK */
.card h2 {
    color: #047857;
}

/* PANEL MENU UTAMA DAN INFORMASI */
.panel {
    background: linear-gradient(135deg, #ffffff, #e8f3ff);
    border: 1px solid #c9def5;
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.08);
}

/* KARTU MENU */
.menu-card {
    background: linear-gradient(145deg, #ffffff, #e1f8ef);
    border: 1px solid #c1ead8;
    box-shadow: 0 5px 15px rgba(16, 185, 129, 0.06);
}

.menu-card:nth-child(2) {
    background: linear-gradient(145deg, #ffffff, #e0ebff);
    border-color: #c7d9fa;
}

.menu-card:nth-child(3) {
    background: linear-gradient(145deg, #ffffff, #eee5ff);
    border-color: #ddd0fa;
}

/* JUDUL KARTU MENU */
.menu-card h3 {
    color: #087f6e;
}

/* ADMINISTRATOR */
.admin {
    background: linear-gradient(135deg, #d1fae5, #dbeafe);
    border: 1px solid #b7e8d1;
}

/* INFORMASI SISTEM */
.info {
    background: linear-gradient(120deg, #d1fae5, #dbeafe);
    border: 1px solid #a7e5d0;
    color: #065f46;
}

/* EFEK KETIKA KURSOR DIARAHKAN */
.card,
.menu-card,
.panel {
    transition: all 0.3s ease;
}

.card:hover,
.menu-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(16, 185, 129, 0.15);
}
/* ===== DASHBOARD KLINIK PREMIUM ===== */

/* Background utama */
body {
    background: linear-gradient(135deg, #dceff7 0%, #e2f7ee 50%, #e9e4ff 100%);
    color: #172554;
    background-attachment: fixed;
}

/* Header */
.header h1 {
    color: #102a43;
    font-size: 30px;
    font-weight: 800;
    letter-spacing: -0.8px;
}

.header p {
    color: #64748b;
}

/* Kartu statistik */
.cards .card {
    border: none;
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 12px 28px rgba(30, 64, 100, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.cards .card:nth-child(1) {
    background: linear-gradient(135deg, #047857, #34d399);
    border-top: none;
}

.cards .card:nth-child(2) {
    background: linear-gradient(135deg, #1d4ed8, #60a5fa);
    border-top: none;
}

.cards .card:nth-child(3) {
    background: linear-gradient(135deg, #6d28d9, #a78bfa);
    border-top: none;
}

.cards .card p {
    color: #ffffff;
    font-weight: 600;
}

.cards .card h2 {
    color: #ffffff;
    font-size: 42px;
    font-weight: 800;
}

.cards .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 35px rgba(30, 64, 100, 0.2);
}

/* Panel utama */
.panel {
    background: rgba(255, 255, 255, 0.78);
    border: 1px solid rgba(255, 255, 255, 0.9);
    border-radius: 22px;
    box-shadow: 0 12px 30px rgba(30, 64, 100, 0.08);
    backdrop-filter: blur(10px);
}

.panel h2 {
    color: #102a43;
    font-weight: 800;
}

/* Kartu menu */
.menu-card {
    border: 1px solid #b7ead5;
    border-radius: 18px;
    background: linear-gradient(145deg, #ffffff, #d1fae5);
    box-shadow: 0 8px 20px rgba(16, 185, 129, 0.08);
    transition: all 0.3s ease;
}

.menu-card:nth-child(2) {
    background: linear-gradient(145deg, #ffffff, #dbeafe);
    border-color: #bfdbfe;
}

.menu-card:nth-child(3) {
    background: linear-gradient(145deg, #ffffff, #ede9fe);
    border-color: #ddd6fe;
}

.menu-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 16px 28px rgba(30, 64, 100, 0.15);
}

.menu-card .icon {
    width: 58px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 17px;
    background: #a7f3d0;
    box-shadow: 0 6px 15px rgba(16, 185, 129, 0.12);
}

.menu-card:nth-child(2) .icon {
    background: #bfdbfe;
}

.menu-card:nth-child(3) .icon {
    background: #ddd6fe;
}

.menu-card h3 {
    color: #17324d;
    font-weight: 800;
}

.menu-card p {
    color: #52677e;
    line-height: 1.8;
}

/* Informasi sistem */
.info {
    background: linear-gradient(120deg, #d1fae5, #dbeafe);
    border: 1px solid #a7e5d0;
    border-radius: 16px;
    color: #065f46;
    padding: 22px;
    line-height: 1.9;
}

/* Administrator */
.admin {
    background: linear-gradient(135deg, #d1fae5, #dbeafe);
    border: 1px solid #b7e8d1;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(30, 64, 100, 0.08);
}

/* Sidebar */
.sidebar {
    background: linear-gradient(180deg, #0b172a, #123b4a);
    box-shadow: 8px 0 30px rgba(15, 23, 42, 0.12);
}

.sidebar a {
    transition: all 0.25s ease;
}

.sidebar a:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(4px);
}

.sidebar a.active {
    background: linear-gradient(110deg, #059669, #34d399);
    color: #ffffff;
    box-shadow: 0 7px 20px rgba(16, 185, 129, 0.25);
}

/* Footer */
.footer {
    color: #64748b;
}

/* Responsif */
@media (max-width: 650px) {
    .header h1 {
        font-size: 25px;
    }

    .cards .card {
        padding: 22px;
    }
}
/* ===== MENU UTAMA - DESAIN PREMIUM ===== */

.menu-card {
    position: relative;
    overflow: hidden;
    padding: 25px;
    border: 1px solid #b7e4d5;
    border-radius: 20px;
    background: linear-gradient(145deg, #ecfdf5, #d1fae5);
    box-shadow: 0 8px 22px rgba(5, 150, 105, 0.10);
    transition: all 0.3s ease;
}

.menu-card:nth-child(2) {
    background: linear-gradient(145deg, #eff6ff, #dbeafe);
    border-color: #bfdbfe;
    box-shadow: 0 8px 22px rgba(37, 99, 235, 0.10);
}

.menu-card:nth-child(3) {
    background: linear-gradient(145deg, #f5f3ff, #ede9fe);
    border-color: #ddd6fe;
    box-shadow: 0 8px 22px rgba(109, 40, 217, 0.10);
}

/* Garis aksen di bagian atas kartu */
.menu-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: #10b981;
}

.menu-card:nth-child(2)::before {
    background: #3b82f6;
}

.menu-card:nth-child(3)::before {
    background: #8b5cf6;
}

/* Ikon */
.menu-card .icon {
    width: 58px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    border-radius: 17px;
    background: #a7f3d0;
    font-size: 27px;
}

.menu-card:nth-child(2) .icon {
    background: #bfdbfe;
}

.menu-card:nth-child(3) .icon {
    background: #ddd6fe;
}

/* Judul dan deskripsi */
.menu-card h3 {
    margin-bottom: 10px;
    color: #123b35;
    font-size: 16px;
    font-weight: 800;
}

.menu-card:nth-child(2) h3 {
    color: #1e40af;
}

.menu-card:nth-child(3) h3 {
    color: #5b21b6;
}

.menu-card p {
    color: #52677e;
    font-size: 12px;
    line-height: 1.8;
}

/* Efek hover */
.menu-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 16px 30px rgba(30, 64, 100, 0.15);
}

.menu-card:nth-child(1):hover {
    border-color: #10b981;
}

.menu-card:nth-child(2):hover {
    border-color: #3b82f6;
}

.menu-card:nth-child(3):hover {
    border-color: #8b5cf6;
}

/* Panel Menu Utama */
.panel {
    background: linear-gradient(145deg, #ffffff, #f0f7ff);
    border: 1px solid #dce8f4;
    border-radius: 22px;
    box-shadow: 0 10px 28px rgba(30, 64, 100, 0.08);
}
/* ===== HEADER DASHBOARD PREMIUM ===== */

/* Judul Dashboard Klinik */
.header h1 {
    color: #312e81;
    font-size: 32px;
    font-weight: 800;
    letter-spacing: -1px;
    margin-bottom: 5px;
}

/* Teks Selamat Datang */
.header p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.8;
}

/* Aksen pada teks sambutan */
.header p::first-letter {
    color: #059669;
}

/* Kotak Administrator */
.admin {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 20px;
    background: linear-gradient(135deg, #ede9fe, #ddd6fe, #c4b5fd);
    border: 1px solid #c4b5fd;
    border-radius: 16px;
    color: #4c1d95;
    box-shadow: 0 8px 22px rgba(109, 40, 217, 0.15);
    transition: all 0.3s ease;
}

/* Tulisan Administrator */
.admin {
    font-weight: 800;
}

/* Efek hover Administrator */
.admin:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(109, 40, 217, 0.22);
}

/* Judul panel */
.panel h2 {
    color: #312e81;
    font-weight: 800;
}

/* Background area header */
.header {
    padding: 5px 0 22px;
}

/* Tampilan administrator lebih menonjol */
.admin strong {
    color: #5b21b6;
}
/* Kartu statistik bisa diklik */
.cards a.card {
    display: block;
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.cards a.card small {
    display: inline-block;
    margin-top: 12px;
    color: white;
    font-size: 12px;
    opacity: 0.9;
}

.cards a.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(30, 64, 100, 0.2);
}
    </style>
</head>

<body>

    <aside class="sidebar">
    <div class="brand">
        🏥 Klinik Sehat
        <small>Sistem Informasi Klinik</small>
    </div>

    <a href="/" class="active">▦ Dashboard</a>
    <a href="{{ route('pasien.index') }}">
        👥 Data Pasien
    </a>
    <a href="{{ route('dokters.index') }}">
        🩺 Data Dokter
    </a>
    <a href="{{ route('jadwal-dokter.index') }}">
        📅 Jadwal Dokter
    </a>
    <a href="/pendaftaran">
        📝 Pendaftaran
    </a>
    <a href="{{ route('laporan.index') }}">
    📄 Laporan
</a>
</aside>

    <main class="main">

       <section class="cards">

    <a href="{{ route('pasien.index') }}" class="card">
        <p>👥 Total Pasien</p>
        <h2>{{ $totalPasien ?? 0 }}</h2>
        <small>Lihat data pasien →</small>
    </a>

    <a href="{{ route('dokters.index') }}" class="card">
        <p>🩺 Total Dokter</p>
        <h2>{{ $totalDokter ?? 0 }}</h2>
        <small>Lihat data dokter →</small>
    </a>

    <a href="{{ route('jadwal-dokter.index') }}" class="card">
        <p>📅 Total Jadwal Dokter</p>
        <h2>{{ $totalJadwal ?? 0 }}</h2>
        <small>Lihat jadwal dokter →</small>
    </a>

</section>

        <section class="panel">
            <h2>Menu Utama</h2>

            <div class="menu-cards">

                <a href="{{ route('pasien.index') }}" class="menu-card">
                    <span class="icon">👥</span>
                    <h3>Data Pasien</h3>
                    <p>Kelola data pasien, tambah pasien baru, edit, dan hapus data.</p>
                </a>

                <a href="{{ route('dokters.index') }}" class="menu-card">
                    <span class="icon">🩺</span>
                    <h3>Data Dokter</h3>
                    <p>Lihat dan kelola informasi dokter serta spesialisasinya.</p>
                </a>

                <a href="{{ route('jadwal-dokter.index') }}" class="menu-card">
                    <span class="icon">📅</span>
                    <h3>Jadwal Dokter</h3>
                    <p>Atur hari praktik, jam mulai, jam selesai, dan keterangan.</p>
                </a>

            </div>
        </section>

        <section class="panel">
            <h2>Informasi Sistem</h2>

            <div class="info">
                <strong>Sistem Informasi Klinik Sehat</strong><br>
                Dashboard ini menampilkan jumlah data pasien, dokter, dan jadwal
                praktik yang tersimpan di database.
                Gunakan menu utama untuk mengelola data klinik.
            </div>
        </section>

        <footer class="footer">
            Sistem Informasi Klinik Sehat &copy; {{ date('Y') }}
        </footer>

    </main>

</body>
</html>