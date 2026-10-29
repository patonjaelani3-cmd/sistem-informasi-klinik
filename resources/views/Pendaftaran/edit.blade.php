<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pendaftaran - Klinik Sehat</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px;
            color: #1e293b;
        }

        .container {
            max-width: 750px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 15px #00000010;
        }

        h1 {
            color: #075985;
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select, textarea {
            box-sizing: border-box;
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
        }

        textarea {
            min-height: 100px;
        }

        button, .back {
            display: inline-block;
            padding: 12px 18px;
            border: 0;
            border-radius: 7px;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        button {
            background: #0284c7;
            color: white;
        }

        .back {
            background: #e2e8f0;
            color: #1e293b;
            margin-right: 8px;
        }

        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 30px;
            border-radius: 7px;
            margin-bottom: 18px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="card">
        <h1>Edit Pendaftaran Pasien</h1>
        <p>Perbarui data pendaftaran di bawah ini.</p>

        @if ($errors->any())
            <div class="errors">
                <strong>Periksa kembali data:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="pasien_id">Nama Pasien</label>
                <select name="pasien_id" id="pasien_id" required>
                    @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->id }}"
                            {{ old('pasien_id', $pendaftaran->pasien_id) == $pasien->id ? 'selected' : '' }}>
                            {{ $pasien->nama_pasien }} - {{ $pasien->no_rm }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="dokter_id">Dokter Tujuan</label>
                <select name="dokter_id" id="dokter_id" required>
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}"
                            {{ old('dokter_id', $pendaftaran->dokter_id) == $dokter->id ? 'selected' : '' }}>
                            {{ $dokter->nama_dokter }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_pendaftaran">Tanggal Pendaftaran</label>
                <input type="date"
                       name="tanggal_pendaftaran"
                       id="tanggal_pendaftaran"
                       value="{{ old('tanggal_pendaftaran', $pendaftaran->tanggal_pendaftaran) }}"
                       required>
            </div>

            <div class="form-group">
                <label for="keluhan">Keluhan Pasien</label>
                <textarea name="keluhan"
                          id="keluhan"
                          required>{{ old('keluhan', $pendaftaran->keluhan) }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status Pendaftaran</label>
                <select name="status" id="status" required>
                    @foreach (['Menunggu', 'Diperiksa', 'Selesai'] as $status)
                        <option value="{{ $status }}"
                            {{ old('status', $pendaftaran->status) == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>

            <a href="{{ route('pendaftaran.index') }}" class="back">
                Kembali
            </a>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</div>
</body>
</html>