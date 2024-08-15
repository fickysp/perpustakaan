<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "ini create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "ini adlaah edit" . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function tambah(){
        $jumlah = 0;
        $kurang = 0;
        $kali = 0;
        $bagi = 0;
        return view('tambah', compact('jumlah','kurang','kali','bagi'));
    }

     function storeTambah(Request $request){
        // penjumlahan
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 + $angka2;

        //pengurangan
        $angka3 = $request->angka3;
        $angka4 = $request->angka4;

        $kurang = $angka3 - $angka4;

        //perkalian
        $angka5 = $request->angka5;
        $angka6 = $request->angka6;

        $kali = $angka5 * $angka6;

        //perkalian
        $angka7 = $request->angka7;
        $angka8 = $request->angka8;

        $bagi = $angka7 /    $angka8;


        return view('tambah', compact('jumlah','kurang','kali', 'bagi'));
    }
}
