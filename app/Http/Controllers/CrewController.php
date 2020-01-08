<?php

namespace App\Http\Controllers;

use App\Crew;
use App\Level;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $crews=Crew::latest()->paginate(5);

            return view('crew.index',compact('crews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $levels=Level::all();
        $crew = Crew::get();
     
		return view('crew.create',['crew' => $crew],compact('levels',$levels));
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
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required',
            'id_level'=>'required',
        ]);

        Crew::create($request->all());
        return redirect()->route('crew.index')
        ->with('Berhasil','Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function show(Crew $crew)
    {
       
      
        return view('crew.show',compact('crew'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function edit(Crew $crew)
    {
        $levels=Level::get();
        return view('crew.edit',compact('crew','karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crew $crew)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required',
            
            'id_level'=>'required',
        ]);
        $crew->update($request->all());
  
        return redirect()->route('pegawai.index')
                        ->with('Berhasil','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crew $crew)
    {
        $crew->delete();
  
        return redirect()->route('crew.index')
                        ->with('Berhasil','Data Berhasil Dihapus');
    }
}
