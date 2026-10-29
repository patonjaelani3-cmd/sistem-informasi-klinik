<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Dokter - Sistem Informasi Klinik</title>

    <style>
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
            padding: 38px 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(23, 37, 84, 0.18);
        }

        .header h1 {
            margin: 0 0 10px;
            font-size: 34px;
            font-weight: 800;
            letter-spacing: 0.5px;
            color: white;
        }

        .header p {
            margin: 0;
            color: #dbeafe;
            font-size: 15px;
        }

        /* CONTAINER */
        .container {
            width: 94%;
            max-width: 1250px;
            margin: 30px auto;
        }

        .card {
            background: rgba(255, 255, 255, 0.94);
            padding: 28px;
            border-radius: 22px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 15px 40px rgba(30, 64, 100, 0.10);
        }

        /* JUDUL DATA DOKTER */
        .title-area {
            text-align: center;
            margin: 8px 0 28px;
        }

        .title-area h2 {
            display: inline-block;
            margin: 0;
            padding-bottom: 12px;
            color: #312e81;
            font-size: 28px;
            font-weight: 800;
            border-bottom: 4px solid #10b981;
        }

        .title-area p {
            margin: 12px 0 0;
            color: #64748b;
            font-size: 14px;
        }

        /* TOMBOL UMUM */
        .btn {
            display: inline-block;
            padding: 11px 16px;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            cursor: pointer;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            transition: all 0.25s ease;
            white-space: nowrap;
        }

        .btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.05);
            box-shadow: 0 7px 15px rgba(30, 64, 100, 0.15);
        }

        /* TOMBOL KEMBALI */
        .btn-kembali {
            background: linear-gradient(135deg, #475569, #334155);
            color: white;
        }

        /* TOMBOL TAMBAH DOKTER */
        .btn-tambah {
            background: linear-gradient(135deg, #047857, #10b981);
            color: white;
            padding: 13px 20px;
            box-shadow: 0 7px 18px rgba(5, 150, 105, 0.20);
        }

        /* ALERT */
        .alert {
            background: linear-gradient(120deg, #d1fae5, #ecfdf5);
            color: #065f46;
            padding: 14px 18px;
            border: 1px solid #a7f3d0;
            border-radius: 12px;
            margin-bottom: 22px;
        }

        /* TABEL */
        .table-wrapper {
            overflow-x: auto;
            border-radius: 14px;
            border: 1px solid #bfdbfe;
            box-shadow: 0 8px 22px rgba(30, 64, 100, 0.10);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
            background: #eaf2ff;
        }

        thead th {
            padding: 17px 13px;
            background: linear-gradient(110deg, #172554, #1e40af);
            color: white;
            text-align: left;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid #93c5fd;
            white-space: nowrap;
        }

        tbody td {
            padding: 15px 13px;
            border: 1px solid #cbd5e1;
            text-align: left;
            font-size: 13px;
            color: #334155;
            vertical-align: middle;
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

        .kosong {
            text-align: center;
            color: #64748b;
            padding: 30px;
        }

        /* TOMBOL AKSI DALAM TABEL */
        .aksi {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .aksi form {
            margin: 0;
        }

        .btn-detail {
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            color: white;
        }

        .btn-edit {
            background: linear-gradient(135deg, #d97706, #fbbf24);
            color: #422006;
        }

        .btn-hapus {
            background: linear-gradient(135deg, #dc2626, #f87171);
            color: white;
        }

        /* KEDUA TOMBOL DI KIRI BAWAH */
        .bottom-actions {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 22px;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            color: #64748b;
            margin-top: 28px;
            padding-bottom: 20px;
            font-size: 13px;
        }

        /* TAMPILAN HP */
        @media (max-width: 600px) {
            .header {
                padding: 30px 18px;
            }

            .header h1 {
                font-size: 26px;
            }

            .container {
                width: 96%;
                margin: 18px auto;
            }

            .card {
                padding: 17px;
                border-radius: 16px;
            }

            .title-area h2 {
                font-size: 24px;
            }

            .bottom-actions {
                align-items: stretch;
                flex-direction: column;
            }

            .bottom-actions .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <h1>Sistem Informasi Klinik</h1>
        <p>Kelola data dokter klinik dengan mudah.</p>
    </header>

    <main class="container">
        <div class="card">

            <!-- JUDUL -->
            <div class="title-area">
                <h2>Data Dokter</h2>
                <p>Kelola informasi dokter, spesialisasi, dan jadwal praktik.</p>
            </div>

            <!-- PESAN SUKSES -->
            @if (session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- TABEL DATA DOKTER -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Jadwal Praktik</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($dokters as $dokter)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dokter->nama_dokter }}</td>
                                <td>{{ $dokter->spesialis }}</td>
                                <td>{{ $dokter->jenis_kelamin }}</td>
                                <td>{{ $dokter->no_telepon }}</td>
                                <td>{{ $dokter->alamat }}</td>
                                <td>{{ $dokter->jadwal_praktik }}</td>

                                <td>
                                    <div class="aksi">

                                        <a href="{{ route('dokters.show', $dokter->id) }}"
                                           class="btn btn-detail">
                                            Detail
                                        </a>

                                        <a href="{{ route('dokters.edit', $dokter->id) }}"
                                           class="btn btn-edit">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('dokters.destroy', $dokter->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data dokter ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-hapus">
                                                Hapus
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="kosong">
                                    Belum ada data dokter. Silakan klik Tambah Dokter.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- TOMBOL KEMBALI DI KIRI, TAMBAH DOKTER DI KANAN -->
            <div class="bottom-actions">

                <a href="{{ route('dashboard') }}" class="btn btn-kembali">
                    &larr; Kembali ke Dashboard
                </a>

                <a href="{{ route('dokters.create') }}" class="btn btn-tambah">
                    + Tambah Dokter
                </a>

            </div>

        </div>

        <!-- FOOTER -->
        <footer class="footer">
            Sistem Informasi Klinik &copy; {{ date('Y') }}
        </footer>

    </main>

</body>
</html>