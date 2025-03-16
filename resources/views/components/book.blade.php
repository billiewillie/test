<article class="flex flex-col gap-2">
    <div class="w-full aspect-[2/3] overflow-hidden flex items-start">
        <img
            src="{{asset('storage/' . '$book->image)}}"
            class="object-cover w-full h-full"
            alt="{{$book->title}}">
    </div>
    <header>
        <h3 class="font-semibold text-base">{{$book->title}}</h3>
    </header>
    <p class="text-sm text-gray-500">Автор: {{$book->author}}</p>
    <p class="text-sm text-gray-500">Год: {{$book->year}}</p>
    <footer class="flex flex-col md:flex-row text-lg gap-2 md:gap-4">
        <a
            href="{{route('book.edit', ['book' => $book->id])}}"
            class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded text-sm">
            редактировать
        </a>
        <x-mod :book="$book"/>
    </footer>
</article>
