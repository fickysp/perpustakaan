<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDataBuku($category_id)
    {
        $books = Book::where('category_id', $category_id)->get();
        return response()->json(['data'=>$books, 'message' => 'Fetch Success!!']);
    }

    public function getBuku($buku_id)
    {
        // $books = Book::where('category_id', $buku_id)->get();
        // return response()->json(['data'=>$books, 'message' => 'Fetch Success!!']);
        try {
            $book = Book::where('id', $buku_id)->first();
            return response()->json(['data'=>$book, 'message' => 'Fetch Success!!']);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()]);
        }
    }

}
