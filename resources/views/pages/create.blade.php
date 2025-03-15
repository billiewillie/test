<x-layout>
    <section>
        <div class="container flex flex-col gap-8">
            <h1>Добавить книгу</h1>
            <form
                action="{{route('book.store')}}"
                class="flex flex-col gap-y-8 items-start"
                enctype="multipart/form-data"
                method="post">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="title" class="text-xl">Название книги</label>
                        <input
                            type="text"
                            name="title"
                            value="{{old('title')}}"
                            class="p-2 rounded flex-auto border-2 border-gray-200 text-2xl">
                        @error('title')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="author" class="text-xl">Автор</label>
                        <input
                            type="text"
                            name="author"
                            value="{{old('author')}}"
                            class="p-2 rounded flex-auto border-2 border-gray-200 text-2xl">
                        @error('author')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="year" class="text-xl">Год издания</label>
                        <input
                            type="number"
                            name="year"
                            value="{{old('year')}}"
                            class="p-2 rounded flex-auto border-2 border-gray-200 text-2xl">
                        @error('year')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="image" class="text-xl">Обложка книги</label>
                        <input
                            type="file"
                            name="image"
                            accept="image/png, image/jpeg, image/jpg"
                            placeholder="Обложка книги"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 p-4">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG, JPEG (max. 4MB)</p>
                        @error('image')
                        <p class="text-red-500 text-base">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <button
                    type="submit"
                    class="flex items-center cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded text-base">Добавить</button>
            </form>
        </div>
    </section>
</x-layout>
