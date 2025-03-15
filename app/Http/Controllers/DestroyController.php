<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Book $book): RedirectResponse
    {
        $book->delete();

        return redirect()->route('index')->with('success', 'Книга удалена');
    }
}
