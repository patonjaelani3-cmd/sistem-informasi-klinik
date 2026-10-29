<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter - Klinik</title>

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
        }
    </style>
</head>

<body>

<header>
    <h1>Sistem Informasi Klinik</h1>
    <p>Formulir Edit Dokter</p>
</header>

<main>
    <div class="card">

        <h2>Edit Data Dokter</h2>

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dokters.update', $dokter->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter"
                   value="{{ old('nama_dokter', $dokter->nama_dokter) }}"
                   required>

            <label>Spesialis</label>
            <input type="text" name="spesialis"
                   value="{{ old('spesialis', $dokter->spesialis) }}"
                   required>

            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki"
                    {{ old('jenis_kelamin', $dokter->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>

                <option value="Perempuan"
                    {{ old('jenis_kelamin', $dokter->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>

            <label>Nomor Telepon</label>
            <input type="text" name="no_telepon"
                   value="{{ old('no_telepon', $dokter->no_telepon) }}"
                   required>

            <label>Alamat</label>
            <textarea name="alamat" required>{{ old('alamat', $dokter->alamat) }}</textarea>

            <label>Jadwal Praktik</label>
            <input type="text" name="jadwal_praktik"
                   value="{{ old('jadwal_praktik', $dokter->jadwal_praktik) }}"
                   required>

            <button type="submit" class="btn simpan">
                Simpan Perubahan
            </button>

            <a href="{{ route('dokters.index') }}" class="btn kembali">
                Batal
            </a>
        </form>

    </div>
</main>

</body>
</html>