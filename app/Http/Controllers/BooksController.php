<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Book::with('category')->get();
        return view('books.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create([
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis' => $request->penulis,
        ]);
        return redirect()->to('book')->with('success', 'data behasil ditambahkan');
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
        $edit = Book::find($id);
        return view('books.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Book::where('id', $id)->update([
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis' => $request->penulis,
        ]);

        return redirect()->to('book')->with('message', 'Data behasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return redirect()->to('book')->with('message', 'Data berhasil dihapus');
    }
}
