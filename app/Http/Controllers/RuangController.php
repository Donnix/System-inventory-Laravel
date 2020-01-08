<?php

namespace App\Http\Controllers;

use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ruangs = Ruang::latest()->paginate(5);
  
        return view('ruangs.index',compact('ruangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ruangs.create');
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
          
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'keterangan' => 'required',           
        ]);
  
        Ruang::create($request->all());
   
        return redirect()->route('ruangs.index')
                        ->with('success','Ruangan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
         return view('ruangs.show',compact('ruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang)
    {
         return view('ruangs.edit',compact('ruang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang)
    {
 $request->validate([
             
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'keterangan' => 'required',            
        ]);
  
        $ruang->update($request->all());
  
        return redirect()->route('ruangs.index')
                        ->with('success','Ruangan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        $ruang->delete();
  
        return redirect()->route('ruangs.index')
                        ->with('success','Ruangan deleted successfully');
    }

}
