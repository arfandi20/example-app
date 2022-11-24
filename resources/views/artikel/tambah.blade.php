
@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Tambah Data </h1>
    
    <form action="{{ route ('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="masukkan judul" value="{{ old('judul')}}">
        </div>
        <div class="form-group">
            <label for="">foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" placeholder="masukkan foto" value="{{ old('foto')}}">
        </div>
        <div class="form-group">
            <label for="">Isi</label>
            <textarea type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" placeholder="masukkan isi artikel" value="{{ old('isi')}}"></textarea>
        </div>
        <div class="form-group">
            <label for="">Tanggal Terbit</label>
            <input type="date" class="form-control @error('tanggal_artikel') is-invalid @enderror" name="tanggal_artikel" placeholder="masukkan tanggal" value="{{ old('tanggal_artikel')}}">
        </div>
        <div class="form-group">
            <label for="">Penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" placeholder="masukkan nama penulis" value="{{ old('penulis')}}">
        </div>
        <div class="form-group">
            <label for="">Kategori Artikel</label>
            <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                <option value="">Pilih Kategori</option>
                @foreach($kategori as $item)
                <option value="{{ $item->id }}" @selected(old('kategori')==$item->id)>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>
</div>
@endsection