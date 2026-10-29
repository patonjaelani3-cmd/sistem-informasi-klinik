<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Dokter - Klinik Sehat</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
        }

        h1 {
            margin-top: 0;
            color: #0f4c81;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: none;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-add {
            background: #0d9488;
        }

        .btn-edit {
            background: #2563eb;
        }

        .btn-delete {
            background: #dc2626;
        }

        .table-wrap {
            overflow-x: auto;
            margin-top: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 13px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }

        th {
            background: #eaf2f8;
        }

        .success {
            padding: 12px;
            margin: 15px 0;
            background: #dcfce7;
            color: #166534;
            border-radius: 7px;
        }

        .empty {
            text-align: center;
            padding: 25px;
            color: #64748b;
        }

        form {
            display: inline;
        }
        /* ===== PERBAIKAN TAMPILAN JADWAL DOKTER ===== */

/* Judul dan deskripsi di tengah */
.header,
.page-header {
    text-align: center;
}

.header h1,
.page-header h1 {
    text-align: center;
    color: #1e3a8a;
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 10px;
}

.header p,
.page-header p {
    text-align: center;
    color: #475569;
    font-size: 14px;
}

/* Area utama */
.main,
.container {
    color: #1e293b;
}

/* Panel tabel */
.panel,
.table-container {
    background: #eff6ff;
    padding: 24px;
    border: 1px solid #bfdbfe;
    border-radius: 14px;
    box-shadow: 0 5px 16px rgba(30, 64, 175, 0.08);
}

/* Judul bagian tabel */
.panel h2,
.table-container h2 {
    text-align: center;
    color: #1e3a8a;
    font-size: 21px;
    margin-bottom: 20px;
}

/* Tabel */
table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid #64748b;
    background: #eaf2ff;
    font-size: 13px;
}

/* Garis setiap kolom dan baris */
table th,
table td {
    border: 1.5px solid #94a3b8 !important;
    padding: 13px 12px;
    text-align: left;
}

/* Judul kolom */
table thead th {
    background: #1d4ed8 !important;
    color: #ffffff !important;
    border: 1.5px solid #1e40af !important;
    font-weight: 700;
}

/* Isi tabel tidak putih polos */
table tbody tr:nth-child(odd) {
    background: #dbeafe !important;
}

table tbody tr:nth-child(even) {
    background: #bfdbfe !important;
}

/* Efek saat kursor diarahkan ke baris */
table tbody tr:hover {
    background: #a5d8ff !important;
}

/* Tombol tambah jadwal */
.btn-add {
    background: #0f766e;
    color: white;
    border-radius: 7px;
    padding: 10px 16px;
    border: none;
    text-decoration: none;
}

.btn-add:hover {
    background: #115e59;
}

/* Tombol Edit */
.btn-edit {
    background: #d97706;
    color: white;
    border-radius: 6px;
    padding: 7px 11px;
}

/* Tombol Hapus */
.btn-delete {
    background: #dc2626;
    color: white;
    border-radius: 6px;
    padding: 7px 11px;
}

/* Kembali ke Dashboard */
.back-link {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 15px;
    background: #dbeafe;
    color: #1d4ed8;
    border: 1px solid #93c5fd;
    border-radius: 7px;
    text-decoration: none;
    font-weight: 600;
}

.back-link:hover {
    background: #bfdbfe;
}

/* Tampilan laptop kecil */
@media (max-width: 768px) {
    .main,
    .container {
        padding: 16px;
    }

    table {
        min-width: 750px;
    }
}
/* ===== PERBAIKAN AKHIR JADWAL DOKTER ===== */

/* Latar belakang halaman, bukan putih polos */
body {
    background: linear-gradient(135deg, #dbeafe, #d1fae5, #e0e7ff) !important;
    color: #1e293b;
}

/* Judul dan keterangan di tengah */
h1 {
    text-align: center !important;
    color: #1e3a8a;
    font-size: 29px;
    font-weight: 800;
    margin-bottom: 12px;
}

header p,
.header p {
    text-align: center !important;
    color: #475569;
}

/* Bagian judul halaman */
header,
.header {
    text-align: center !important;
}

/* Panel utama */
.container,
.main,
.content {
    background: transparent;
}

/* Area tabel berwarna biru muda */
table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid #64748b !important;
    background: #dbeafe !important;
}

/* Garis kolom dan baris lebih jelas */
table th,
table td {
    border: 1.5px solid #94a3b8 !important;
    padding: 12px;
}

/* Kepala tabel */
table thead th {
    background: #1d4ed8 !important;
    color: white !important;
    border: 1.5px solid #1e40af !important;
}

/* Warna isi tabel */
table tbody tr:nth-child(odd) {
    background: #eff6ff !important;
}

table tbody tr:nth-child(even) {
    background: #dbeafe !important;
}

/* Warna baris saat kursor diarahkan ke tabel */
table tbody tr:hover {
    background: #bfdbfe !important;
}

/* Tombol Tambah Jadwal */
a[href*="jadwal-dokter/create"] {
    display: inline-block;
    padding: 10px 16px;
    background: #0f766e;
    color: white !important;
    text-decoration: none;
    border-radius: 7px;
    font-weight: 600;
}

a[href*="jadwal-dokter/create"]:hover {
    background: #115e59;
}

/* Tombol Kembali ke Dashboard */
a[href="/"],
a[href="{{ url('/') }}"] {
    display: inline-block;
    padding: 10px 16px;
    margin-top: 18px;
    background: #0f766e;
    color: white !important;
    text-decoration: none;
    border: 1px solid #0f766e;
    border-radius: 7px;
    font-weight: 600;
}

a[href="/"]:hover,
a[href="{{ url('/') }}"]:hover {
    background: #115e59;
}

/* Tampilan HP */
@media (max-width: 768px) {
    table {
        min-width: 750px;
    }
}
    </style>
</head>
<body>

<div class="container">
    <h1>Jadwal Dokter</h1>
    <p>Kelola jadwal praktik dokter Klinik Sehat.</p>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('jadwal-dokter.create') }}" class="btn btn-add">
        + Tambah Jadwal
    </a>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($jadwals as $jadwal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jadwal->dokter->nama_dokter ?? '-' }}</td>
                        <td>{{ $jadwal->dokter->spesialisasi ?? $jadwal->dokter->spesialis ?? '-' }}</td>
                        <td>{{ $jadwal->hari }}</td>
                        <td>{{ substr($jadwal->jam_mulai, 0, 5) }}</td>
                        <td>{{ substr($jadwal->jam_selesai, 0, 5) }}</td>
                        <td>{{ $jadwal->keterangan ?? '-' }}</td>
                        <td>
                            <a
                                href="{{ route('jadwal-dokter.edit', $jadwal->id) }}"
                                class="btn btn-edit">
                                Edit
                            </a>

                            <form
                                action="{{ route('jadwal-dokter.destroy', $jadwal->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-delete">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="empty">
                            Belum ada jadwal dokter. Klik Tambah Jadwal untuk memulai.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <p>
        <a href="{{ route('dashboard') }}">← Kembali ke Dashboard</a>
    </p>
</div>

</body>
</html>