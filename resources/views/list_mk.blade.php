@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Daftar Mata Kuliah</h2>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <br>

    <a href="/matakuliah/create">+ Tambah Mata Kuliah</a>

    <br>
    <br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>UUID</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mataKuliah as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->kode_mk }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection