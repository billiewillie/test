<x-layout>

    <section class="hero">
        <div class="container flex flex-col gap-8 xl:gap-12">
            <h1>Все книги</h1>
            <x-search/>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8 gap-y-12">
                @foreach($books as $book)
                    <x-book :$book/>
                @endforeach
            </div>
            {{$books->links()}}
        </div>
    </section>
</x-layout>
