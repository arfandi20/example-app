<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bmi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $tinggi = $request->tinggi / 100;
        $berat = $request->berat;
        $bmi = bmi($berat, $tinggi);
        $status = status(bmi($berat, $tinggi));
        $class = new Konsul($request->tahun, $status);
        $hobi = explode(',', $request->hobi);

        //untuk menghitung bmi
        // $a = new konsul($request->berat, $request->tinggi);

        $data = [
            'nama' => $nama,
            'tinggi' => $tinggi,
            'berat' => $berat,
            'bmi' => $bmi,
            'status' => $status,
            'hobi' => $hobi[rand(0, count($hobi) - 1)],
            'umur' => $class->hitungUmur(),
            'konsul' => $class->StatusKonsul()

        ];
        return view('bmi', compact('data'));
    }

}

function bmi($berat, $tinggi)
{
    return $berat / ($tinggi * $tinggi);
}

function status($bmi)
{
    if ($bmi < 18.5) {
        return 'Kurus';
    } elseif ($bmi <= 22.9) {
        return 'Normal';
    } elseif ($bmi <= 29.9) {
        return 'Gemuk';
    } elseif ($bmi > 30) {
        return 'Obesitas';
    }
}

class Umur
{
    public function __construct($tahunLahir, $bmi)
    {
        $this->tahunLahir = $tahunLahir;
        $this->bmi = $bmi;
    }

    public function hitungUmur()
    {
        return 2022 - $this->tahunLahir;
    }
}

class Konsul extends Umur
{
    public function StatusKonsul()
    {
        if ($this->hitungUmur() >= 17) {
            $status = 'dewasa';
        } else {
            $status = 'belum dewasa';
        }

        if ($status == 'dewasa' && $this->bmi == 'Obesitas') {
            return 'Anda bisa mendapatkan Konsultasi gratis.';
        } else {
            return 'Anda belum bisa mendapatkan Konsultasi gratis.';
        }
    }
}
