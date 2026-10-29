<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien | Klinik Sehat</title>

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
            width: 240px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #0f766e;
            padding: 28px 18px;
            color: white;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 35px;
        }

        .brand small {
            display: block;
            font-size: 12px;
            font-weight: normal;
            margin-top: 8px;
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
            margin-left: 240px;
            padding: 35px;
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
            color: #64748b;
            margin-top: 8px;
        }

        .admin {
            background: white;
            padding: 12px 18px;
            border-radius: 10px;
        }

        .panel {
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 4px 15px #00000008;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 22px;
        }

        .panel-header h2 {
            font-size: 20px;
        }

        .btn {
            display: inline-block;
            padding: 11px 16px;
            border: none;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-add {
            background: #0f766e;
        }

        .btn-edit {
            background: #d97706;
        }

        .btn-delete {
            background: #dc2626;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .alert {
            padding: 14px;
            background: #dcfce7;
            color: #166534;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th, td {
            padding: 15px 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #f8fafc;
            color: #475569;
            font-size: 13px;
        }

        td {
            font-size: 14px;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .actions .btn {
            padding: 8px 11px;
        }

        .empty {
            text-align: center;
            padding: 35px;
            color: #64748b;
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
            }

            .main {
                margin-left: 0;
                padding: 18px;
            }

            .header,
            .panel-header {
                align-items: flex-start;
                flex-direction: column;
            }
        }
        * {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #edf3fb;
    color: #334155;
}

/* SIDEBAR */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    height: 100vh;
    padding: 22px 12px;
    background: linear-gradient(180deg, #164e63, #1e3a8a);
    color: white;
}

.brand {
    margin-bottom: 28px;
    font-size: 19px;
    font-weight: bold;
}

.brand small {
    display: block;
    margin-top: 6px;
    font-size: 11px;
    font-weight: normal;
    color: #dbeafe;
}

.sidebar a {
    display: block;
    padding: 11px;
    margin-bottom: 6px;
    border-radius: 7px;
    color: white;
    text-decoration: none;
    font-size: 13px;
}

.sidebar a:hover,
.sidebar a.active {
    background: rgba(255, 255, 255, 0.18);
}

/* KONTEN */
.main {
    margin-left: 200px;
    padding: 24px;
}

/* HEADER */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 22px;
    padding: 22px 25px;
    border-radius: 12px;
    background: linear-gradient(120deg, #1e3a8a, #2563eb);
    color: white;
}

.header h1 {
    margin: 0;
    font-size: 25px;
    color: white;
}

.header p {
    margin: 7px 0 0;
    font-size: 13px;
    color: #dbeafe;
}

.admin {
    padding: 10px 13px;
    border-radius: 8px;
    background: #ede9fe;
    color: #5b21b6;
    font-size: 12px;
    font-weight: bold;
    white-space: nowrap;
}

/* PANEL DATA */
.panel,
.card {
    padding: 22px;
    border-radius: 12px;
    background: #ffffff;
    box-shadow: 0 4px 15px rgba(30, 64, 100, 0.07);
}

.panel-title {
    margin: 0 0 20px;
    color: #1e3a8a;
    font-size: 21px;
}

/* TABEL */
.table-wrapper {
    width: 100%;
    overflow-x: auto;
    border: 1px solid #d5e2f2;
    border-radius: 9px;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 700px;
}

thead th {
    padding: 13px 11px;
    background: #dbeafe;
    color: #1e3a8a;
    text-align: left;
    font-size: 12px;
    border: 1px solid #c4d7f0;
}

tbody td {
    padding: 13px 11px;
    font-size: 12px;
    border: 1px solid #dbe5f1;
}

tbody tr:nth-child(odd) td {
    background: #ffffff;
}

tbody tr:nth-child(even) td {
    background: #f0f9ff;
}

tbody tr:hover td {
    background: #e0f2fe;
}

.kosong {
    text-align: center;
    padding: 22px;
    color: #64748b;
}

/* TOMBOL */
.btn,
button {
    display: inline-block;
    padding: 8px 12px;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    font-family: Arial, sans-serif;
    font-size: 12px;
    cursor: pointer;
}

.btn-tambah,
.btn-primary {
    background: #0f766e;
    color: white;
}

.btn-edit,
.btn-warning {
    background: #fbbf24;
    color: #422006;
}

.btn-hapus,
.btn-danger {
    background: #dc4c5b;
    color: white;
}

.btn-kembali {
    background: #334155;
    color: white;
}

.btn:hover,
button:hover {
    filter: brightness(0.95);
}

.aksi {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
}

.aksi form {
    margin: 0;
}

/* TOMBOL TAMBAH DI KANAN BAWAH */
.bottom-actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 16px;
}

/* PESAN SUKSES */
.alert {
    padding: 11px 14px;
    margin-bottom: 16px;
    border-radius: 7px;
    background: #d1fae5;
    border: 1px solid #a7f3d0;
    color: #065f46;
    font-size: 13px;
}

/* FOOTER */
.footer {
    margin-top: 22px;
    text-align: center;
    color: #64748b;
    font-size: 12px;
}

/* LAYAR KECIL */
@media (max-width: 700px) {
    .sidebar {
        position: static;
        width: 100%;
        height: auto;
    }

    .main {
        margin-left: 0;
        padding: 14px;
    }

    .header {
        align-items: flex-start;
        flex-direction: column;
    }

    .panel,
    .card {
        padding: 14px;
    }
}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Pasien | Klinik Sehat</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #dceff7, #e2f7ee, #e9e4ff);
            color: #172554;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            padding: 28px 18px;
            background: linear-gradient(180deg, #0b172a, #123b4a);
            color: white;
            overflow-y: auto;
            z-index: 10;
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
            border-radius: 9px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .sidebar a.active {
            background: linear-gradient(110deg, #059669, #34d399);
            color: white;
            font-weight: bold;
        }

        /* AREA UTAMA - SAMA DENGAN DASHBOARD */
        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 30px;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 28px;
            padding: 25px 28px;
            background: linear-gradient(120deg, #ffffff, #e9e4ff);
            border: 1px solid #ddd6fe;
            border-radius: 18px;
            box-shadow: 0 8px 22px rgba(49, 46, 129, 0.08);
        }

        .header h1 {
            color: #312e81;
            font-size: 28px;
            font-weight: 800;
        }

        .header p {
            margin-top: 8px;
            color: #64748b;
            font-size: 14px;
        }

        .admin {
            padding: 13px 18px;
            background: linear-gradient(135deg, #ede9fe, #c4b5fd);
            border: 1px solid #c4b5fd;
            border-radius: 12px;
            color: #5b21b6;
            font-weight: bold;
            white-space: nowrap;
        }

        /* PANEL DATA PASIEN */
        .panel {
            padding: 25px;
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(30, 64, 100, 0.08);
        }

        .panel-title {
            margin-bottom: 8px;
            color: #312e81;
            font-size: 22px;
            font-weight: 800;
        }

        .panel-description {
            margin-bottom: 22px;
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
        }

        /* PESAN BERHASIL */
        .alert {
            padding: 13px 16px;
            margin-bottom: 20px;
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            border-radius: 10px;
            font-size: 14px;
        }

        /* TABEL */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border: 1px solid #dbe3f0;
            border-radius: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
            background: white;
        }

        thead th {
            padding: 15px 12px;
            background: linear-gradient(110deg, #312e81, #4f46e5);
            color: white;
            font-size: 13px;
            font-weight: bold;
            text-align: left;
            white-space: nowrap;
            border-right: 1px solid rgba(255, 255, 255, 0.15);
        }

        tbody td {
            padding: 15px 12px;
            color: #334155;
            font-size: 13px;
            border-bottom: 1px solid #e2e8f0;
            border-right: 1px solid #e2e8f0;
        }

        tbody tr:nth-child(even) {
            background: #f1f5ff;
        }

        tbody tr:nth-child(odd) {
            background: #ffffff;
        }

        tbody tr:hover {
            background: #e0e7ff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* TOMBOL AKSI */
        .aksi {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .aksi form {
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 9px 12px;
            border: none;
            border-radius: 7px;
            color: white;
            font-size: 12px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
            white-space: nowrap;
        }

        .btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.05);
        }

        .btn-edit {
            background: linear-gradient(135deg, #d97706, #fbbf24);
            color: #422006;
        }

        .btn-hapus {
            background: linear-gradient(135deg, #dc2626, #f87171);
            color: white;
        }

        .btn-tambah {
            background: linear-gradient(135deg, #047857, #10b981);
            color: white;
            padding: 12px 18px;
            font-size: 13px;
            box-shadow: 0 5px 12px rgba(16, 185, 129
        }
        /* Judul dan keterangan di tengah */
.header {
    justify-content: center;
    text-align: center;
    position: relative;
}

.header h1 {
    text-align: center;
}

.header p {
    text-align: center;
}

/* Administrator tetap di sebelah kanan */
.admin {
    position: absolute;
    right: 25px;
    top: 50%;
    transform: translateY(-50%);
}
    </style>
</head>

<body>

    <aside class="sidebar">
    <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
    <a href="{{ route('pasien.index') }}" class="active">👥 Data Pasien</a>
    <a href="{{ route('dokters.index') }}">🩺 Data Dokter</a>
    <a href="{{ route('jadwal-dokter.index') }}">🗓️ Jadwal Dokter</a>
    <a href="{{ url('/pendaftaran') }}">📋 Pendaftaran</a>

    <a href="{{ url('/laporan') }}">📊 Laporan</a>
</aside>

    <main class="main">

        <header class="header">
            <div>
                <h1>Data Pasien</h1>
                <p>Kelola data pasien Klinik Sehat.</p>
            </div>

            <div class="admin">Administrator</div>
        </header>

        <section class="panel">

            <div class="panel-header">
                <h2>Daftar Pasien</h2>
            </div>
                <a href="{{ route('pasien.create') }}" class="btn btn-add">
                    + Tambah Pasien
                </a>
            </div> 

            @if (session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Rekam Medis</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pasiens as $pasien)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pasien->no_rm }}</td>
                                <td>{{ $pasien->nama_pasien }}</td>
                                <td>{{ $pasien->jenis_kelamin }}</td>
                                <td>{{ $pasien->tanggal_lahir->format('d-m-Y') }}</td>
                                <td>{{ $pasien->no_telepon ?? '-' }}</td>

                                <td>
                                    <div class="actions">
                                        <a
                                            href="{{ route('pasien.edit', $pasien->id) }}"
                                            class="btn btn-edit">
                                            Edit
                                        </a>

                                       <form
    action="{{ route('pasien.destroy', $pasien->id) }}"
    method="POST"
    onsubmit="return confirm('Yakin ingin menghapus pasien ini?')">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-delete">
        Hapus
    </button>
</form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="empty">
                                    Belum ada data pasien.
                                    Silakan tambahkan pasien baru.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </section>

    </main>

</body>
</html>