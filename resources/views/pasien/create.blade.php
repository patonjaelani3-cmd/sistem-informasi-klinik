<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien | Klinik Sehat</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin-bottom: 8px;
            color: #0f766e;
        }

        .header p {
            color: #64748b;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 4px 15px #0000000a;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
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
            font-weight: bold;
            font-size: 14px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            background: white;
        }

        input:focus, select:focus, textarea:focus {
            outline: 2px solid #99f6e4;
            border-color: #0f766e;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-save {
            background: #0f766e;
            color: white;
        }

        .btn-back {
            background: #e2e8f0;
            color: #334155;
        }

        .btn:hover {
            opacity: 0.85;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>Tambah Pasien</h1>
            <p>Masukkan informasi pasien baru dengan benar.</p>
        </div>

        <div class="card">

            <form action="{{ route('pasien.store') }}" method="POST">
                @csrf

                <div class="form-grid">

                    <div class="form-group">
                        <label for="no_rm">Nomor Rekam Medis *</label>

                        <input
                            type="text"
                            id="no_rm"
                            name="no_rm"
                            value="{{ old('no_rm') }}"
                            placeholder="Contoh: RM001"
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
                            value="{{ old('nama_pasien') }}"
                            placeholder="Masukkan nama pasien"
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
                                {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki
                            </option>

                            <option value="Perempuan"
                                {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
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
                            value="{{ old('tanggal_lahir') }}"
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
                            value="{{ old('no_telepon') }}"
                            placeholder="Contoh: 081234567890"
                            maxlength="20">

                        @error('no_telepon')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group full">
                        <label for="alamat">Alamat</label>

                        <textarea
                            id="alamat"
                            name="alamat"
                            placeholder="Masukkan alamat lengkap pasien">{{ old('alamat') }}</textarea>

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
                        Simpan Pasien
                    </button>
                </div>

            </form>

        </div>

    </div>

</body>
</html>