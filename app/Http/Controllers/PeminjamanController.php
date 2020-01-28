<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Pegawai;
use App\Inventarisir;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamans = Peminjaman::latest()->paginate(5);
        
        return view('peminjaman.index',compact('peminjamans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        $peminjaman = Peminjaman::get();
        $pegawais=Pegawai::all();
        $inventarisirs = Inventarisir::all();
         return view('peminjaman.create',['peminjaman' => $peminjaman],compact('pegawais',$pegawais,'inventarisirs',$inventarisirs));
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
            'nama_peminjam'=>'required',
            'jumlah'=>'required',
            'tanggal_pinjam'=>'required',
            'tanggal_kembali'=>'required',
            'status_peminjaman'=>'required',
            'nama_pegawai'=>'required',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')
        ->with('Berhasil','Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show',compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        $pegawais=Pegawai::get();
        $inventarisirs=Inventarisir::all();
        return view('peminjaman.edit',compact('pegawais','peminjaman','inventarisirs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'nama'=>'required',
            'nama_peminjam'=>'required',
            'jumlah'=>'required',
            'tanggal_pinjam'=>'required',
            'tanggal_kembali'=>'required',
            'status_peminjaman'=>'required',
            'nama_pegawai'=>'required',
        ]);
        $peminjaman->update($request->all());
  
        return redirect()->route('peminjaman.index')
                        ->with('Berhasil','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
  
        return redirect()->route('peminjaman.index')
                        ->with('Berhasil','Data Berhasil DiHapus');
    }
}