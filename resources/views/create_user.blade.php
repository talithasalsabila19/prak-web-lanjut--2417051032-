@extends('layouts.app')

@section('content')

<div class="card">

    <h1 class="page-title">Tambah Pengguna</h1>

    <p class="page-description">
        Silakan isi data pengguna di bawah ini.
    </p>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>

        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required>
        </div>

        <div class="form-group">
            <label for="kelas_id">Kelas</label>

            <select name="kelas_id" id="kelas_id" required>
                <option value="">-- Pilih Kelas --</option>

                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn">
            Simpan Pengguna
        </button>

    </form>

</div>

@endsection