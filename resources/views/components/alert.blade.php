@props(['type', 'message'])

@if(session()->has($type))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"
        class="inline-flex fixed transition-all top-2 left-1/2 transform -translate-x-1/2 items-center p-4 mb-4 text-sm rounded
        {{$type == 'success' ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100'}}">
        {{$message}}
    </div>
@endif
