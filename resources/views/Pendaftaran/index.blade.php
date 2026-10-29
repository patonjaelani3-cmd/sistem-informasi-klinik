<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien - Klinik Sehat</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            flex-shrink: 0;
            background: #075985;
            color: white;
            padding: 25px 15px;
        }

        .brand {
            margin: 5px 10px;
            font-size: 23px;
            font-weight: bold;
        }

        .subtitle {
            margin: 10px;
            color: #dbeafe;
            font-size: 14px;
        }

        .sidebar a {
            display: block;
            margin: 8px 0;
            padding: 13px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #0369a1;
        }

        .main {
            flex: 1;
            min-width: 0;
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            color: #64748b;
        }

        .admin {
            padding: 12px 18px;
            border-radius: 10px;
            background: white;
            white-space: nowrap;
        }

        .card {
            margin-bottom: 25px;
            padding: 25px;
            border-radius: 14px;
            background: white;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
        }

        .card h2 {
            margin-top: 0;
            font-size: 20px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: white;
            font-size: 14px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        button,
        .btn {
            display: inline-block;
            padding: 10px 14px;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            padding: 13px 20px;
            background: #0284c7;
            font-weight: bold;
        }

        button:hover {
            background: #0369a1;
        }

        .btn-warning {
            background: #d97706;
        }

        .btn-danger {
            background: #dc2626;
        }

        .btn-warning:hover {
            background: #b45309;
        }

        .btn-danger:hover {
            background: #b91c1c;
        }

        .success {
            margin-bottom: 20px;
            padding: 14px;
            border-radius: 8px;
            background: #dcfce7;
            color: #166534;
        }

        .errors {
            margin-bottom: 20px;
            padding: 14px 30px;
            border-radius: 8px;
            background: #fee2e2;
            color: #991b1b;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 13px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: middle;
        }

        th {
            background: #f8fafc;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-buttons form {
            margin: 0;
        }

        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            background: #fef3c7;
            color: #92400e;
            font-size: 12px;
        }

        .empty {
            padding: 25px;
            text-align: center;
            color: #64748b;
        }

        @media (max-width: 800px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .main {
                padding: 18px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .header {
                align-items: flex-start;
                flex-direction: column;
            }
        }
        * {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: "Segoe UI", Arial, sans-serif;
    background: linear-gradient(135deg, #e0f2fe, #d1fae5, #ede9fe);
    background-attachment: fixed;
    color: #1e293b;
}

/* HEADER */
.header {
    background: linear-gradient(120deg, #172554, #1d4ed8, #0891b2);
    color: white;
    padding: 30px 35px;
    box-shadow: 0 8px 25px rgba(23, 37, 84, 0.18);
}

.header h1 {
    margin: 0 0 8px;
    font-size: 30px;
    font-weight: 800;
    color: white;
}

.header p {
    margin: 0;
    color: #dbeafe;
}

/* AREA UTAMA */
.container,
.main {
    max-width: 1450px;
    margin: 30px auto;
    padding: 0 25px;
}

.card,
.panel {
    background: rgba(255, 255, 255, 0.94);
    padding: 28px;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.8);
    box-shadow: 0 15px 40px rgba(30, 64, 100, 0.10);
}

/* JUDUL */
h2 {
    color: #312e81;
    font-weight: 800;
}

/* TABEL */
.table-wrapper {
    width: 100%;
    overflow-x: auto;
    border-radius: 14px;
    border: 1px solid #bfdbfe;
    box-shadow: 0 8px 22px rgba(30, 64, 100, 0.10);
}

table {
    width: 100%;
    min-width: 850px;
    border-collapse: collapse;
    background: #eaf2ff;
}

thead th {
    background: linear-gradient(110deg, #172554, #1e40af);
    color: white;
    padding: 16px 13px;
    text-align: left;
    font-size: 13px;
    font-weight: 700;
    border: 1px solid #93c5fd;
    white-space: nowrap;
}

tbody td {
    padding: 16px 13px;
    border: 1px solid #cbd5e1;
    color: #334155;
    font-size: 13px;
}

tbody tr:nth-child(odd) td {
    background: #e0f2fe;
}

tbody tr:nth-child(even) td {
    background: #d1fae5;
}

tbody tr:hover td {
    background: #bfdbfe;
    transition: background 0.2s ease;
}

/* TOMBOL */
.btn,
button {
    display: inline-block;
    padding: 10px 15px;
    border: none;
    border-radius: 9px;
    color: white;
    text-decoration: none;
    font-family: inherit;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.25s ease;
}

.btn:hover,
button:hover {
    transform: translateY(-2px);
    filter: brightness(1.05);
}

/* TAMBAH PASIEN */
.btn-tambah,
.btn-primary {
    background: linear-gradient(135deg, #047857, #10b981);
    color: white;
    box-shadow: 0 6px 16px rgba(5, 150, 105, 0.20);
}

/* EDIT */
.btn-edit,
.btn-warning {
    background: linear-gradient(135deg, #d97706, #fbbf24);
    color: #422006;
}

/* HAPUS */
.btn-hapus,
.btn-danger {
    background: linear-gradient(135deg, #dc2626, #f87171);
    color: white;
}

/* KEMBALI */
.btn-kembali {
    background: linear-gradient(135deg, #475569, #334155);
    color: white;
}

/* POSISI TOMBOL TAMBAH PASIEN DI KANAN BAWAH */
.bottom-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 22px;
}

/* TOMBOL AKSI DALAM TABEL */
.aksi {
    display: flex;
    align-items: center;
    gap: 7px;
    flex-wrap: wrap;
}

.aksi form {
    margin: 0;
}

/* PESAN */
.alert {
    padding: 13px 16px;
    margin-bottom: 20px;
    border-radius: 10px;
    background: #d1fae5;
    border: 1px solid #a7f3d0;
    color: #065f46;
}

.kosong {
    text-align: center;
    padding: 30px;
    color: #64748b;
}

/* FOOTER */
.footer {
    text-align: center;
    color: #64748b;
    padding: 22px;
    font-size: 13px;
}

/* RESPONSIF */
@media (max-width: 650px) {
    .header {
        padding: 24px 18px;
    }

    .container,
    .main {
        padding: 0 12px;
        margin: 18px auto;
    }

    .card,
    .panel {
        padding: 16px;
    }

    .bottom-actions .btn {
        width: 100%;
        text-align: center;
    }
}
    </style>
</head>

<body>
<div class="layout">

    <aside class="sidebar">
        <div class="brand">🏥 Klinik Sehat</div>
        <div class="subtitle">Sistem Informasi Klinik</div>

        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        <a href="{{ route('pasien.index') }}">👥 Data Pasien</a>
        <a href="{{ route('dokters.index') }}">🩺 Data Dokter</a>
        <a href="{{ route('jadwal-dokter.index') }}">🗓️ Jadwal Dokter</a>
        <a href="{{ route('pendaftaran.index') }}" class="active">📋 Pendaftaran</a>
        <a href="{{ url('/laporan') }}">📊 Laporan</a>
    </aside>

    <main class="main">

        <header class="header">
            <div>
                <h1>Pendaftaran Pasien</h1>
                <p>Kelola pendaftaran kunjungan pasien Klinik Sehat.</p>
            </div>

            <div class="admin">👤 Administrator</div>
        </header>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="errors">
                <strong>Data belum berhasil disimpan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="card">
            <h2>📝 Form Pendaftaran Baru</h2>

            <form action="{{ route('pendaftaran.store') }}" method="POST">
                @csrf

                <div class="form-grid">

                    <div class="form-group">
                        <label for="pasien_id">Nama Pasien</label>

                        <select name="pasien_id" id="pasien_id" required>
                            <option value="">-- Pilih Pasien --</option>

                            @foreach ($pasiens as $pasien)
                                <option
                                    value="{{ $pasien->id }}"
                                    {{ old('pasien_id') == $pasien->id ? 'selected' : '' }}
                                >
                                    {{ $pasien->nama_pasien }} ({{ $pasien->no_rm }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dokter_id">Dokter Tujuan</label>

                        <select name="dokter_id" id="dokter_id" required>
                            <option value="">-- Pilih Dokter --</option>

                            @foreach ($dokters as $dokter)
                                <option
                                    value="{{ $dokter->id }}"
                                    {{ old('dokter_id') == $dokter->id ? 'selected' : '' }}
                                >
                                    {{ $dokter->nama_dokter }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pendaftaran">Tanggal Pendaftaran</label>

                        <input
                            type="date"
                            name="tanggal_pendaftaran"
                            id="tanggal_pendaftaran"
                            value="{{ old('tanggal_pendaftaran', date('Y-m-d')) }}"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="status">Status Pendaftaran</label>

                        <select name="status" id="status" required>
                            <option value="Menunggu"
                                {{ old('status', 'Menunggu') == 'Menunggu' ? 'selected' : '' }}>
                                Menunggu
                            </option>

                            <option value="Diperiksa"
                                {{ old('status') == 'Diperiksa' ? 'selected' : '' }}>
                                Diperiksa
                            </option>

                            <option value="Selesai"
                                {{ old('status') == 'Selesai' ? 'selected' : '' }}>
                                Selesai
                            </option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label for="keluhan">Keluhan Pasien</label>

                        <textarea
                            name="keluhan"
                            id="keluhan"
                            placeholder="Contoh: Pasien mengalami demam, sakit kepala, dan batuk sejak 2 hari yang lalu."
                            required
                        >{{ old('keluhan') }}</textarea>

                        <small style="color: #64748b; margin-top: 5px;">
                            Tuliskan gejala pasien dan sejak kapan keluhan muncul.
                        </small>
                    </div>

                    <div class="form-group full">
                        <button type="submit">💾 Simpan Pendaftaran</button>
                    </div>

                </div>
            </form>
        </section>

        <section class="card">
            <h2>📋 Riwayat Pendaftaran</h2>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Pendaftaran</th>
                            <th>Nama Pasien</th>
                            <th>Dokter</th>
                            <th>Tanggal</th>
                            <th>Keluhan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pendaftarans as $pendaftaran)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pendaftaran->no_pendaftaran }}</td>
                                <td>{{ $pendaftaran->nama_pasien }}</td>
                                <td>{{ $pendaftaran->nama_dokter }}</td>
                                <td>{{ $pendaftaran->tanggal_pendaftaran }}</td>
                                <td>{{ $pendaftaran->keluhan }}</td>

                                <td>
                                    <span class="badge">
                                        {{ $pendaftaran->status }}
                                    </span>
                                </td>

                                <td>
                                    <div class="action-buttons">

                                        <a
                                            href="{{ route('pendaftaran.edit', $pendaftaran->id) }}"
                                            class="btn btn-warning"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus pendaftaran ini?')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="empty">
                                    Belum ada data pendaftaran pasien.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</div>
</body>
</html>