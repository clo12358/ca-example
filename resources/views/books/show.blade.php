<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p><b>Title:</b> {{ $book->title }}</p>
                        <p><b>Description:</b> {{ $book->description }}</p>
                        <p><b>ISBN:</b> {{ $book->isbn }}</p>                        
                        <p><b>Publisher:</b> {{ $book->publisher->name }}</p> 
                </div>
            </div>
        </div>
    </div>

</x-app-layout>