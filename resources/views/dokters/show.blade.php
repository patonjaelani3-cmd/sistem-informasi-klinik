<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Dokter - Klinik</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #087f8c;
            color: white;
            padding: 25px 5%;
        }

        main {
            max-width: 750px;
            width: 92%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #00000010;
        }

        .row {
            padding: 13px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }

        .btn {
            display: inline-block;
            padding: 11px 15px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            margin-top: 20px;
        }

        .edit {
            background: #d97706;
        }

        .kembali {
            background: #475569;
        }
    </style>
</head>

<body>

<header>
    <h1>Sistem Informasi Klinik</h1>
    <p>Detail Data Dokter</p>
</header>

<main>
    <div class="card">

        <h2>Informasi Dokter</h2>

        <div class="row">
            <span class="label">Nama Dokter</span>
            {{ $dokter->nama_dokter }}
        </div>

        <div class="row">
            <span class="label">Spesialis</span>
            {{ $dokter->spesialis }}
        </div>

        <div class="row">
            <span class="label">Jenis Kelamin</span>
            {{ $dokter->jenis_kelamin }}
        </div>

        <div class="row">
            <span class="label">Nomor Telepon</span>
            {{ $dokter->no_telepon }}
        </div>

        <div class="row">
            <span class="label">Alamat</span>
            {{ $dokter->alamat }}
        </div>

        <div class="row">
            <span class="label">Jadwal Praktik</span>
            {{ $dokter->jadwal_praktik }}
        </div>

        <a href="{{ route('dokters.edit', $dokter->id) }}"
           class="btn edit">
            Edit Dokter
        </a>

        <a href="{{ route('dokters.index') }}"
           class="btn kembali">
            Kembali ke Data Dokter
        </a>

    </div>
</main>

</body>
</html>