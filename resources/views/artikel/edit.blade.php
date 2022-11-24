@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Edit Data </h1>
    
    <form action="{{ url ('artikel/'. $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$data->judul}}">
        </div>
        <div class="form-group">
            <img src="{{ asset('storage/'.$data->foto) }}" height="100px" alt="">
            <label for="">Foto</label>
            <input type="file" class="form-control @error('judul') is-invalid @enderror" name="foto" value="{{$data->foto}}">
        </div>
        <div class="form-group">
            <label for="">Isi</label>
            <textarea type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" value="">{{$data->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Tanggal Artikel</label>
            <input type="date" class="form-control @error('tanggal_artikel') is-invalid @enderror" name="tanggal_artikel" value="{{$data->tanggal_artikel}}">
        </div>
        <div class="form-group">
            <label for="">Penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{$data->penulis}}">
        </div>
        <div class="form-group">
            <label for="">Kategori Artikel</label>
            <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                <option value="">Pilih Kategori</option>
                @foreach($kategori as $item)
                <option value="{{ $item->id }}" @selected($data->kategori_id==$item->id)>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
    </form>
</div>
@endsection
