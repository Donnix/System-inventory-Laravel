<?php

namespace App\Http\Controllers;

use App\Inventarisir;
use App\Type;
use App\Ruang;
use App\Pet;
use Illuminate\Http\Request;

class InventarisirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    public function create(Request $request)
    {
        $inventarisir = Inventarisir::get();
        $types=Type::all();
        $ruangs=Ruang::all();
        $pets=Pet::all();
         return view('inventarisir.create',['inventarisir' => $inventarisir],compact('types',$types,'ruangs',$ruangs,'pets',$pets));
      
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
            'nama_jenis'=>'required',
            'tanggal_register'=>'required',
            'nama_ruangan'=>'required',
            'nama_petugas'=>'required',
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
        $types=Type::all();
        $ruangs=Ruang::all();
        $pets=Pet::all(); 
        
        return view('inventarisir.edit',compact('inventarisir','types','ruangs','pets'));
     
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
            'nama_jenis'=>'required',
            'tanggal_register'=>'required',
            'nama_ruangan'=>'required',
            'nama_petugas'=>'required',
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
