<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter - Klinik</title>

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

        label {
            display: block;
            margin: 15px 0 7px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font: inherit;
        }

        textarea {
            min-height: 90px;
        }

        .btn {
            display: inline-block;
            padding: 11px 15px;
            border: none;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .simpan {
            background: #087f8c;
        }

        .kembali {
            background: #475569;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
        }
    </style>
</head>

<body>

<header>
    <h1>Sistem Informasi Klinik</h1>
    <p>Formulir Tambah Dokter</p>
</header>

<main>
    <div class="card">

        <h2>Tambah Data Dokter</h2>

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dokters.store') }}" method="POST">
            @csrf

            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter"
                   value="{{ old('nama_dokter') }}" required>

            <label>Spesialis</label>
            <input type="text" name="spesialis"
                   value="{{ old('spesialis') }}"
                   placeholder="Contoh: Dokter Umum" required>

            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki"
                    {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>
                <option value="Perempuan"
                    {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>

            <label>Nomor Telepon</label>
            <input type="text" name="no_telepon"
                   value="{{ old('no_telepon') }}" required>

            <label>Alamat</label>
            <textarea name="alamat" required>{{ old('alamat') }}</textarea>

            <label>Jadwal Praktik</label>
            <input type="text" name="jadwal_praktik"
                   value="{{ old('jadwal_praktik') }}"
                   placeholder="Contoh: Senin-Jumat, 08.00-12.00"
                   required>

            <button type="submit" class="btn simpan">
                Simpan Dokter
            </button>

            <a href="{{ route('dokters.index') }}" class="btn kembali">
                Batal
            </a>
        </form>

    </div>
</main>

</body>
</html>