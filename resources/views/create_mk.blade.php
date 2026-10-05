@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Mata Kuliah</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/matakuliah" method="POST">
        @csrf

        <div>
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode_mk" required>
        </div>

        <br>

        <div>
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" required>
        </div>

        <br>

        <div>
            <label>SKS</label>
            <input type="number" name="sks" required>
        </div>

        <br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="/matakuliah">Lihat Daftar Mata Kuliah</a>
</div>

@endsection