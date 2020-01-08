<?php

namespace App\Http\Controllers;

use App\Inventarisir;
use Illuminate\Http\Request;

class InventarisirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarisirs = Inventarisir::latest()->paginate(5);
        
        return view('inventarisir.index',compact('inventarisirs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventarisir.create');
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
        'nama'=>'required',
        'kondisi'=>'required',
        'keterangan'=>'required',
        'jumlah'=>'required',
        'id_jenis'=>'required',
        'tanggal_register'=>'required',
        'id_ruang'=>'required',
        'kode_inventaris'=>'required',
        'id_petugas'=>'required',
        ]);

        Inventarisir::create($request->all());
        return redirect()->route('inventarisir.index')
        ->with('Berhasil','Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventarisir  $inventarisir
     * @return \Illuminate\Http\Response
     */
    public function show(Inventarisir $inventarisir)
    {
        return view('inventarisir.show',compact('inventarisir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventarisir  $inventarisir
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventarisir $inventarisir)
    {
        return view('inventarisir.edit',compact('inventarisir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventarisir  $inventarisir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventarisir $inventarisir)
    {
        $request->validate([
            'nama'=>'required',
            'kondisi'=>'required',
            'keterangan'=>'required',
            'jumlah'=>'required',
            'id_jenis'=>'required',
            'tanggal_register'=>'required',
            'id_ruang'=>'required',
            'kode_inventaris'=>'required',
            'id_petugas'=>'required',
            ]);
            $inventarisir->update($request->all());
  
            return redirect()->route('inventarisir.index')
                            ->with('Berhasil','Data Berhasil Diupdate');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventarisir  $inventarisir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventarisir $inventarisir)
    {
        $inventarisir->delete();
  
        return redirect()->route('inventarisir.index')
                        ->with('Berhasil','Data Berhasil DiHapus');
    }
}
