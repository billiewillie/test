<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $books = Book::latest()
            ->whereLike('title', "%{$request->search}%")
            ->orWhereLike('author', "%{$request->search}%")
            ->paginate(3)
            ->withQueryString();

        return view('pages.index', compact('books'));
    }
}
