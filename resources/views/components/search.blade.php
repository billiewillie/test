<section>
    <form
        method="get"
        class="flex gap-2 w-full"
        action="{{route('index')}}">
        <input
            type="search"
            name="search"
            value="{{request('search')}}"
            placeholder="Поиск по названию книги или ее автору"
            class="p-2 rounded flex-auto border-2 border-gray-200 text-sm xl:text-2xl">
        <button
            class="flex items-center cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded text-base"
            type="submit">
            <svg
                class="inline-flex size-8"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
        </button>
    </form>
</section>
