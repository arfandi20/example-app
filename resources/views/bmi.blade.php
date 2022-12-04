@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="col-md-6">
                     <div class="card">
                            <div class="card-header">Biodata Diri</div>

                            <div class="card-body">
                                <form action="{{ route('bmi.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control mt-3" id="name" placeholder="masukkan nama" name="nama">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="form-label">Tahun Lahir</label>
                                        <select class="form-select" name="tahun">
                                            <option selected>Pilih Tahun lahir</option>
                                            @for($i = 1900; $i < date("Y"); $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="">Tinggi Badan</label>
                                        <input type="number" min="0" class="form-control mt-3" id="tinggi" placeholder="masukkan tinggi badan" name="tinggi">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="">Berat Badan</label>
                                        <input type="number" min="0" class="form-control mt-3" id="berat" placeholder="masukkan tinggi badan" name="berat">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="">Hobi</label>
                                        <input type="text" class="form-control mt-3" id="hobi1" placeholder="Masukkan Hobi 1" name="hobi">
                                        <input type="text" class="form-control mt-3" id="hobi2" placeholder="Masukkan Hobi 2">
                                        <input type="text" class="form-control mt-3" id="hobi3" placeholder="masukkan Hobi 3">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                </div>
                @isset($data)
                <div class= col-md-6>
                        <div class="card">
                            <div class="card-header">Hasil</div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">BMI</label>
                                    <input type="text" class="form-control mt-3" id="bmi" placeholder="" value="{{ $data['bmi']}}">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Status Berat Badan</label>
                                    <input type="text" class="form-control mt-3" id="status" placeholder="" value="{{ $data['status']}}">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Hobi </label>
                                    <input type="text" class="form-control mt-3" id="tampilhobi" placeholder="" value="{{ $data['hobi']}}">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Umur</label>
                                    <input type="number" class="form-control mt-3" id="umur" placeholder=""value="{{ $data['umur']}}">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">konsultasi</label>
                                    <input type="text" class="form-control mt-3" id="konsultasi" placeholder="" value="{{ $data['konsul']}}">
                                </div>

                                <input type="button" class="btn btn-primary mt-3" value="Hapus" onclick="hapus()">
                            </div>
                        </div>
                </div>
                @endisset
        </div>
    </div>
@endsection
