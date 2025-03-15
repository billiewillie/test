<x-layout>
    <section>
        <div class="container flex flex-col gap-8">
            <h1>Редактировать книгу {{$book->title}}</h1>
            <form
                action="{{route('book.update', ['book' => $book->id])}}"
                class="flex flex-col gap-y-8 items-start"
                enctype="multipart/form-data"
                method="post">
                @csrf
                @method('patch')
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="title" class="text-xl">Название книги</label>
                        <input
                            type="text"
                            name="title"
                            value="{{$book->title}}"
                            placeholder="Название книги"
                            class="p-2 rounded flex-auto border-2 border-gray-200 text-3xl">
                        @error('title')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="author" class="text-xl">Автор</label>
                        <input
                            type="text"
                            name="author"
                            value="{{$book->author}}"
                            placeholder="Автор"
                            class="p-2 rounded flex-auto border-2 border-gray-200 text-3xl">
                        @error('author')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="year" class="text-xl">Год издания</label>
                        <input
                            type="number"
                            name="year"
                            value="{{$book->year}}"
                            placeholder="Год издания"
                            class="p-2 rounded flex-auto border-2 border-gray-200 text-3xl">
                        @error('year')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="image" class="text-xl">Обложка книги</label>
                        <div class="w-24 h-36">
                            <img
                                src="{{asset('storage/' . $book->image)}}"
                                alt="{{$book->title}}">
                        </div>
                        <input
                            type="file"
                            accept="image/png, image/jpeg, image/jpg"
                            name="image"
                            placeholder="Обложка книги"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 p-4">
                        @error('image')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <button
                    type="submit"
                    class="flex items-center cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded text-base">
                    Сохранить
                </button>
            </form>
        </div>
    </section>
</x-layout>
