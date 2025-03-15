<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = Storage::disk('public')->putFile('books', $data['image']);

        $this->service->store($data);

        return redirect()->route('index')->with('success', 'Книга добавлена');
    }
}
