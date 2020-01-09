<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Level;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pets = Pet::latest()->paginate(5);
  
        return view('pets.index',compact('pets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         
        $pet = Pet::get();
        $levels=Level::all();
         return view('pets.create',['pet' => $pet],compact('levels',$levels));
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
            
         
          'nama_petugas' => 'required',
          'jk_petugas' => 'required',
          'nama_petugas' => 'required',
          'username' => 'required',
          'password' => 'required',
          'nama_level' => 'required',
        ]);
  
        Pet::create($request->all());
   
        return redirect()->route('pets.index')
                        ->with('success','Pet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
         return view('pets.show',compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
     $levels=Level::get();
         return view('pets.edit',compact('levels','pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
 $request->validate([
            
            'nama_petugas' => 'required',
            'jk_petugas' => 'required',
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama_level' => 'required',
            
        ]);
  
        $pet->update($request->all());
  
        return redirect()->route('pets.index')
                        ->with('success','Pet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
  
        return redirect()->route('pets.index')
                        ->with('success','Pet deleted successfully');
    }

}
