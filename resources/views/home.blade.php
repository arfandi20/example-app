@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="col-md-6">
                     <div class="card">
                            <div class="card-header">Biodata Diri</div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control mt-3" id="name" placeholder="masukkan nama" >
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Tahun Lahir</label>
                                    <input type="number" class="form-control mt-3" id="lahir">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Tinggi Badan</label>
                                    <input type="number" min="0" class="form-control mt-3" id="tinggi" placeholder="masukkan tinggi badan">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Berat Badan</label>
                                    <input type="number" min="0" class="form-control mt-3" id="berat" placeholder="masukkan tinggi badan">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Hobi</label>
                                    <input type="text" class="form-control mt-3" id="hobi1" placeholder="Masukkan Hobi 1">
                                    <input type="text" class="form-control mt-3" id="hobi2" placeholder="Masukkan Hobi 2">
                                    <input type="text" class="form-control mt-3" id="hobi3" placeholder="masukkan Hobi 3">
                                </div>
                                
                                <input type="button" class="btn btn-primary mt-3" value="Hasil" onclick="hasil()">
                            </div>
                        </div>
                </div>
                <div class= col-md-6>
                        <div class="card">
                            <div class="card-header">Hasil</div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">BMI</label>
                                    <input type="text" class="form-control mt-3" id="bmi" placeholder="" >
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Status Berat Badan</label>
                                    <input type="text" class="form-control mt-3" id="status" placeholder="">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Hobi </label>
                                    <input type="text" class="form-control mt-3" id="tampilhobi" placeholder="">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Umur</label>
                                    <input type="number" class="form-control mt-3" id="umur" placeholder="">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">konsultasi</label>
                                    <input type="text" class="form-control mt-3" id="konsultasi" placeholder="">
                                </div>

                                <input type="button" class="btn btn-primary mt-3" value="Hapus" onclick="hapus()">
                            </div>
                        </div>
                </div>
        </div>
    </div>
@endsection
