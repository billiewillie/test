<div x-data="{deleteModal:false}">
    <button
        x-on:click="deleteModal = true"
        class="cursor-pointer bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded text-sm">
        Удалить
    </button>
    <div
        x-cloak
        x-show="deleteModal">
        <div
            x-on:click="deleteModal=false"
            class="overlay"></div>
        <div class="modal">
            <div class="p-8">
                <div class="flex justify-center items-center flex-col gap-4">
                    <h5>Уверены, что хотите удалить?</h5>
                    <div class="flex g-10 justify-center">
                        <form
                            action="{{route('book.destroy', ['book' => $book->id])}}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button
                                class="cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-base"
                                x-on:click="deleteModal=false">
                                Удалить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
