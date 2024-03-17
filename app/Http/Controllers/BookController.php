<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $response = Http::get('https://www.googleapis.com/books/v1/volumes', [
            'q' => $query
        ]);

        $books = $response->json()['items'] ?? [];

        return view('welcome', compact('books'));
    }
}
