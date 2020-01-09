<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporanborrowing;

class LaporanborrowingController extends Controller
{
 
    public function index()
    {
        $laporanborrowings = Laporanborrowing::latest()->paginate(5);
  
        return view('laporanborrowings.index',compact('laporanborrowings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
  
        // return view('laporanborrowings.index',compact('laporans'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('laporanborrowings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function show(Laporanborrowing $laporanborrowing)
    {
         return view('laporanborrowings.show',compact('laporanborrowing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporanborrowing  $laporanborrowing
     * @return \Illuminate\Http\Response
     */
   
    public function destroy(Laporanborrowing $laporanborrowing)
    {
        //
    }
    public function cari(Request $request)
    {
        $request->validate([
            'startDate'=> 'required',
            'endDate'=> 'required',
            ]);
        $from = $request->startDate;
        $to = $request->endDate;
        $title="Laporan Pinjaman From: ".$from."To:".$to;
        $startDate = $from.' 00:00:00';
        $endDate = $to.' 23:59:59';

        $laporanborrowings= Laporanborrowing::whereBetween('tanggal_pinjam', [$startDate,$endDate])->latest()->paginate(5);
        
        return view('laporanborrowings.index', compact('laporanborrowings', 'startDate', 'endDate'))->with('i', (request()->input('page', 1) - 1) * 5);;
        // return view('laporanborrowings.index');
    }

    public function print(Request $request)
    {

        // $request->validate([
        //     'startDate'=> 'required',
        //     'endDate'=> 'required',
        //     ]);
        $laporanborrowings = $request->inventorie;
        $from = $request->startDate;
        $to = $request->endDate;

        $title ="Laporanpinjamans From: ".$from."To:".$to;
        $redirect = route('laporanborrowings');   
        if(isset($from) && isset($to)){
            $startDate = $from;
            $endDate = $to;

            $laporanborrowings = Laporanborrowing::whereBetween('tanggal_pinjam', [$startDate,$endDate])->latest()->paginate(5);
            $startDate = explode(' ', $startDate)[0];
            $endDate = explode(' ', $endDate)[0];

            return view('laporanborrowings.print', compact('laporanborrowings', 'startDate', 'endDate', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            $laporanborrowings = Laporanborrowing::latest()->paginate(5);

            return view('laporanborrowings.print', compact('laporanborrowings', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
  
    }
  
}
