<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pasien | Klinik Sehat</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 30px 15px;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            color: #0f766e;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 15px #0000000a;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
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

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-save {
            background: #0f766e;
            color: white;
        }

        .btn-back {
            background: #e2e8f0;
            color: #334155;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Data Pasien</h1>
    <p class="subtitle">Perbarui informasi pasien Klinik Sehat.</p>

    <div class="card">
        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">

                <div class="form-group">
                    <label for="no_rm">Nomor Rekam Medis *</label>
                    <input
                        type="text"
                        id="no_rm"
                        name="no_rm"
                        value="{{ old('no_rm', $pasien->no_rm) }}"
                        maxlength="20"
                        required>

                    @error('no_rm')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama_pasien">Nama Lengkap *</label>
                    <input
                        type="text"
                        id="nama_pasien"
                        name="nama_pasien"
                        value="{{ old('nama_pasien', $pasien->nama_pasien) }}"
                        maxlength="255"
                        required>

                    @error('nama_pasien')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin *</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>

                        <option value="Laki-laki"
                            {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan"
                            {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>

                    @error('jenis_kelamin')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir *</label>
                    <input
                        type="date"
                        id="tanggal_lahir"
                        name="tanggal_lahir"
                        value="{{ old('tanggal_lahir', $pasien->tanggal_lahir->format('Y-m-d')) }}"
                        max="{{ date('Y-m-d') }}"
                        required>

                    @error('tanggal_lahir')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_telepon">Nomor Telepon</label>
                    <input
                        type="tel"
                        id="no_telepon"
                        name="no_telepon"
                        value="{{ old('no_telepon', $pasien->no_telepon) }}"
                        maxlength="20">

                    @error('no_telepon')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group full">
                    <label for="alamat">Alamat</label>
                    <textarea
                        id="alamat"
                        name="alamat">{{ old('alamat', $pasien->alamat) }}</textarea>

                    @error('alamat')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="actions">
                <a href="{{ route('pasien.index') }}" class="btn btn-back">
                    Kembali
                </a>

                <button type="submit" class="btn btn-save">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>