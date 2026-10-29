<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan Klinik Sehat</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #edf3fb;
            color: #334155;
        }

        /* HEADER */
        .header {
            padding: 25px 35px;
            background: linear-gradient(120deg, #172554, #1d4ed8, #0891b2);
            color: white;
            box-shadow: 0 5px 18px rgba(30, 64, 100, 0.12);
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
            color: white;
        }

        .header p {
            margin: 0;
            color: #dbeafe;
            font-size: 14px;
        }

        /* KONTEN */
        .container {
            width: 94%;
            max-width: 1400px;
            margin: 25px auto;
        }

        /* KARTU STATISTIK */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .stat-card {
            padding: 22px;
            background: white;
            border: 1px solid #dbeafe;
            border-top: 4px solid #2563eb;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(30, 64, 100, 0.06);
        }

        .stat-card:nth-child(2) {
            border-top-color: #0d9488;
        }

        .stat-card:nth-child(3) {
            border-top-color: #8b5cf6;
        }

        .stat-card p {
            margin: 0;
            color: #64748b;
            font-size: 14px;
        }

        .stat-card h2 {
            margin: 12px 0 0;
            color: #1e3a8a;
            font-size: 32px;
        }

        /* PANEL LAPORAN */
        .panel {
            padding: 25px;
            background: white;
            border: 1px solid #dbeafe;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(30, 64, 100, 0.06);
        }

        .panel h2 {
            margin: 0 0 10px;
            color: #1e3a8a;
            font-size: 23px;
        }

        .tanggal {
            margin-bottom: 20px;
            color: #64748b;
            font-size: 13px;
        }

        /* TOMBOL */
        .actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 22px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            border: none;
            border-radius: 7px;
            font-family: inherit;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            transform: translateY(-1px);
            filter: brightness(0.96);
        }

        .btn-cetak {
            background: #2563eb;
            color: white;
        }

        .btn-kembali {
            background: #e2e8f0;
            color: #334155;
        }

        /* TABEL */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
        }

        table {
            width: 100%;
            min-width: 800px;
            border-collapse: collapse;
        }

        thead th {
            padding: 14px 12px;
            background: #1e3a8a;
            color: white;
            text-align: left;
            font-size: 13px;
            border: 1px solid #3b5ba9;
            white-space: nowrap;
        }

        tbody td {
            padding: 14px 12px;
            border: 1px solid #d5e0ee;
            font-size: 13px;
            color: #334155;
        }

        tbody tr:nth-child(odd) td {
            background: #eff6ff;
        }

        tbody tr:nth-child(even) td {
            background: #ecfdf5;
        }

        tbody tr:hover td {
            background: #dbeafe;
        }

        /* STATUS PENDAFTARAN */
        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            background: #fef3c7;
            color: #92400e;
            font-size: 11px;
            font-weight: 700;
        }

        .status.selesai {
            background: #d1fae5;
            color: #065f46;
        }

        .status.diperiksa {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .kosong {
            padding: 25px;
            text-align: center;
            color: #64748b;
        }

        /* FOOTER */
        .footer {
            padding: 22px;
            text-align: center;
            color: #64748b;
            font-size: 12px;
        }

        /* PENGATURAN CETAK */
        @media print {
            body {
                background: white;
            }

            .header {
                background: white;
                color: black;
                padding: 10px 0;
                box-shadow: none;
                border-bottom: 2px solid #334155;
            }

            .header h1,
            .header p {
                color: black;
            }

            .container {
                width: 100%;
                margin: 15px 0;
            }

            .panel,
            .stat-card {
                box-shadow: none;
                border: 1px solid #ccc;
            }

            .actions,
            .footer {
                display: none;
            }

            .table-wrapper {
                overflow: visible;
            }

            table {
                min-width: 0;
            }

            thead th {
                background: #e2e8f0 !important;
                color: black !important;
            }

            tbody td {
                background: white !important;
                color: black !important;
            }
        }

        /* RESPONSIF */
        @media (max-width: 700px) {
            .header {
                padding: 22px;
            }

            .header h1 {
                font-size: 23px;
            }

            .container {
                width: 96%;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .panel {
                padding: 16px;
            }
        }
        /* TABEL LAPORAN */
table {
    width: 100%;
    border-collapse: collapse !important;
    border: 2px solid #64748b !important;
    background: #ffffff;
}

/* HEADER TABEL */
thead th {
    background: #254a9b !important;
    color: #ffffff !important;
    padding: 13px 12px;
    border: 1px solid #8ba4d6 !important;
    border-bottom: 2px solid #1e3a8a !important;
    text-align: left;
    font-size: 13px;
}

/* GARIS SETIAP KOLOM DAN BARIS */
tbody td {
    padding: 13px 12px;
    border: 1px solid #94a3b8 !important;
    color: #334155;
    font-size: 13px;
}

/* WARNA BARIS SELANG-SELING */
tbody tr:nth-child(odd) {
    background: #ffffff !important;
}

tbody tr:nth-child(even) {
    background: #e8eef8 !important;
}

/* EFEK KURSOR */
tbody tr:hover {
    background: #d2e3fc !important;
}
/* Tombol Kembali ke Dashboard */
a[href="/"],
a[href*="dashboard"] {
    display: inline-block;
    padding: 9px 15px;
    background: linear-gradient(135deg, #1e40af, #3b82f6);
    color: #ffffff !important;
    text-decoration: none;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    transition: 0.2s ease;
}

a[href="/"]:hover,
a[href*="dashboard"]:hover {
    background: #1e3a8a;
}

/* Area panel agar tidak putih polos */
.panel {
    background: #eaf0f8 !important;
    border: 1px solid #cbd8e8;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(30, 64, 175, 0.06);
}

/* Area halaman di sekitar panel */
body {
    background: #e7edf5;
}

/* Area tanggal laporan */
.panel p {
    color: #475569;
}

/* Area tabel tetap jelas */
table {
    background: #f1f5f9;
}

tbody tr:nth-child(odd) {
    background: #f8fafc !important;
}

tbody tr:nth-child(even) {
    background: #e2eaf5 !important;
}
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <h1>📊 Laporan Sistem Informasi Klinik</h1>
        <p>Rekapitulasi data pasien dan pendaftaran klinik.</p>
    </header>

    <main class="container">

        <!-- STATISTIK -->
        <section class="stats">

            <div class="stat-card">
                <p>👥 Total Pasien</p>
                <h2>{{ $totalPasien ?? 0 }}</h2>
            </div>

            <div class="stat-card">
                <p>🩺 Total Dokter</p>
                <h2>{{ $totalDokter ?? 0 }}</h2>
            </div>

            <div class="stat-card">
                <p>📝 Total Pendaftaran</p>
                <h2>{{ $totalPendaftaran ?? 0 }}</h2>
            </div>

        </section>

        <!-- LAPORAN PENDAFTARAN -->
        <section class="panel">

            <h2>Laporan Pendaftaran Pasien</h2>

            <div class="tanggal">
                Tanggal laporan: {{ date('d-m-Y') }}
            </div>

            <!-- TOMBOL -->
            <div class="actions">

                <button type="button"
                        class="btn btn-cetak"
                        onclick="window.print()">
                    🖨 Cetak Laporan
                </button>

                <a href="{{ route('dashboard') }}" class="btn btn-kembali">
                    ← Kembali ke Dashboard
                </a>

            </div>

            <!-- TABEL -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Pendaftaran</th>
                            <th>Tanggal</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Keluhan</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pendaftarans as $pendaftaran)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $pendaftaran->no_pendaftaran }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($pendaftaran->tanggal_pendaftaran)->format('d-m-Y') }}
                                </td>

                                <td>
                                    {{ $pendaftaran->nama_pasien }}
                                </td>

                                <td>
                                    {{ $pendaftaran->nama_dokter }}
                                </td>

                                <td>
                                    {{ $pendaftaran->keluhan }}
                                </td>

                                <td>
                                    @php
                                        $statusClass = match ($pendaftaran->status) {
                                            'Selesai' => 'selesai',
                                            'Diperiksa' => 'diperiksa',
                                            default => '',
                                        };
                                    @endphp

                                    <span class="status {{ $statusClass }}">
                                        {{ $pendaftaran->status }}
                                    </span>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="7" class="kosong">
                                    Belum ada data pendaftaran pasien.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </section>

        <footer class="footer">
            Sistem Informasi Klinik Sehat &copy; {{ date('Y') }}
        </footer>

    </main>

</body>
</html>