<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = artikel::all();
        // $data = DB:: select ('SELECT artikel.id, artikel.judul, artikel.foto, artikel.isi, artikel.kategori_id, artikel.tanggal_artikel, artikel.created_at, artikel.updated_at, artikel.penulis, kategori.nama FROM artikel JOIN kategori ON artikel.kategori_id=kategori.id');
        return view ('artikel.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori:: all();
        return view ('artikel.tambah', compact ('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => "required|string",
            'foto' => "required|image|max:10000|mimes:jpeg,jpg",
            'isi' => "required|string",
            'tanggal_artikel' => "required|string",
            'kategori' => "required|integer",
            'penulis' => "required|string",
        ]);

        $file = $request->file('foto')->store('foto');
        artikel::create(
            [
                'judul' => $request ->judul,
                'foto' => $file,
                'isi' => $request ->isi,
                'tanggal_artikel' => $request ->tanggal_artikel,
                'kategori_id' => $request ->kategori,
                'penulis' => $request ->penulis,
            ]
            );
        return redirect('/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = artikel::findOrFail ($id);
        $kategori = kategori :: all();
        return view ('artikel.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = artikel :: findOrFail ($id);
        $data ->update ([
            'judul' =>$request->judul,
            'isi' =>$request->isi,
            'tanggal_artikel' => $request ->tanggal_artikel,
            'kategori_id' => $request ->kategori,
            'penulis' => $request ->penulis,
        ]);

        if ($request->file('foto')!= null){
            $file = $request->file('foto')->store('foto');
            $data ->update ([
                'foto'=>$file
            ]);
        } else {
            $data->update([
                'foto' =>$data->foto
            ]);
            return redirect('/artikel');
        }

        return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=artikel:: findOrFail($id);
        $data ->delete();
        Storage::delete([$data->foto]);
        return redirect('/artikel');
    }
}
