<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Category;
use App\Models\DetailPinjam;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Category::get();
        $pinjams = Pinjam::with('anggota')->get();
        $anggotas = Anggota::get();
        return view('pinjam.index', compact('datas', 'anggotas', 'pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $anggotas = Anggota::get();
        $kode_unik = Pinjam::get()->last();
        $id_pinjam = isset($kode_unik->id) ? ($kode_unik->id == "" ? 1 : $kode_unik->id) : '';
        $id_pinjam++;
        $kode_transaksi = "PJM" . date("dmY") . sprintf("%0.3s", $id_pinjam);
        return view('pinjam.create', compact('categories', 'anggotas', 'kode_transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pinjam = Pinjam::create([
            'kode_transaksi' => $request->kode_transaksi,
            'anggota_id' => $request->anggota_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'petugas' => (Auth::user()->name ??  'Admin'),
        ]);

        if ($pinjam) {
            foreach ($request->buku_id as $key => $value) {
                DetailPinjam::create([
                    'pinjam_id' => $value,
                    'buku_id' => $pinjam->id,
                ]);
            }
        }
        Alert::success('Sukses', 'Data behasil ditambahkan');

        return redirect()->to('pinjam')->with('success', 'Data berhasil ditambahkan');
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
        $edits = Category::find($id);
        return view('category.edit', compact('edits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::where('id', $id)->update([
            'category_name' => $request->category_name,
        ]);

        return redirect()->to('category')->with('message', 'Data behasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->to('category')->with('message', 'Data berhasil dihapus');
    }
}
