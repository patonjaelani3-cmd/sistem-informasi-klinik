<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Dokter - Klinik</title>

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
            max-width: 650px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
        }

        h1 {
            color: #0f4c81;
            margin-top: 0;
        }

        label {
            display: block;
            margin: 18px 0 7px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 15px;
        }

        textarea {
            min-height: 90px;
        }

        .btn {
            display: inline-block;
            margin-top: 22px;
            padding: 12px 18px;
            border: none;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }

        .simpan {
            background: #0d9488;
        }

        .batal {
            background: #64748b;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Jadwal Dokter</h1>
    <p>Perbarui jadwal praktik dokter.</p>

    @if ($errors->any())
        <div class="error">
            <strong>Periksa kembali data berikut:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jadwal-dokter.update', $jadwal->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <label for="dokter_id">Nama Dokter</label>
        <select name="dokter_id" id="dokter_id" required>
            <option value="">-- Pilih Dokter --</option>

            @foreach ($dokters as $dokter)
                <option value="{{ $dokter->id }}"
                    {{ old('dokter_id', $jadwal->dokter_id) == $dokter->id ? 'selected' : '' }}>
                    {{ $dokter->nama_dokter }}
                </option>
            @endforeach
        </select>

        <label for="hari">Hari Praktik</label>
        <select name="hari" id="hari" required>
            @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                <option value="{{ $hari }}"
                    {{ old('hari', $jadwal->hari) == $hari ? 'selected' : '' }}>
                    {{ $hari }}
                </option>
            @endforeach
        </select>

        <label for="jam_mulai">Jam Mulai</label>
        <input type="time"
               name="jam_mulai"
               id="jam_mulai"
               value="{{ old('jam_mulai', substr($jadwal->jam_mulai, 0, 5)) }}"
               required>

        <label for="jam_selesai">Jam Selesai</label>
        <input type="time"
               name="jam_selesai"
               id="jam_selesai"
               value="{{ old('jam_selesai', substr($jadwal->jam_selesai, 0, 5)) }}"
               required>

        <label for="keterangan">Keterangan (Opsional)</label>
        <textarea name="keterangan"
                  id="keterangan">{{ old('keterangan', $jadwal->keterangan) }}</textarea>

        <button type="submit" class="btn simpan">
            Simpan Perubahan
        </button>

        <a href="{{ route('jadwal-dokter.index') }}"
           class="btn batal">
            Batal
        </a>

    </form>

</div>

</body>
</html>