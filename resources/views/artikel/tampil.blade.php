@extends('layouts.app')

@section('content')
<h1>Kategori</h1>

<a href="{{ url('artikel/create') }}" class="btn btn-primary mt-3">Tambah Data</a>

<div class="mt-4">
    <form>
    <table class="table text-center">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Foto</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal Terbit</th>
                <th scope="col">Kategori</th>
                <th scope="col">Penulis</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($data as $item)
            <tr>
                {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                <td>{{ $item->id}}</td>
                <td>{{ $item->judul}}</td>
                <td><img src="{{ asset('storage/'.$item->foto) }}" height="100px" alt=""></td>
                <td>{{ $item->isi}}</td>
                <td>{{ $item->tanggal_artikel }}</td>
                <td>{{ $item->kategori->nama }}</td>
                <td>{{ $item->penulis}}</td>
                <td>
                    <a href="{{ url ('artikel/'. $item->id. '/edit') }}" class="btn btn-danger btn-sm mb-3">Edit</a>
                    <a href="{{ url ('deleteartikel/'.$item->id)}}" class="btn btn-danger btn-sm mb-3">
                            Hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </form>
</div
>
@endsection
