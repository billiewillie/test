<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\UpdateRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Book $book): RedirectResponse
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            Storage::disk('public')->delete($book->image);
            $data['image'] = Storage::disk('public')->putFile('books', $data['image']);
        }

        $this->service->update($data, $book);

        return redirect()->route('index')->with('success', 'Книга обновлена');
    }
}
