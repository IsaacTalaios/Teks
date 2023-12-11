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
                    <form action="{{ route('book.store')}}" method="POST">
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-5/6 pr-3">
                                <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="title">
                                    {{ __('Name')}}
                                </label>
                                <input class="w-full border border-gray-200 text-gray-900 rounded p-2" id="title" type="title" name="title" value="{{ old('title')}}">                            
                                <p class="text-gray-600 text-xs italic">Liburuaren izena</p>
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="w-auto">
                                <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="pages">
                                    {{ __('Pages')}}
                                </label>
                                <input class="w-full border border-gray-200 text-gray-900 rounded p-2" id="pages" type="number" name="pages">
                                <p class="text-gray-600 text-xs italic">Orrialde kopurua</p>
                            </div>                
                        </div>
                        <x-primary-button class="mt-4">
                            {{ __('Send') }}
                        </x-primary-button>
                    </form>
                </div>         
            </div>
        </div>
    </div>
    @foreach ($books as $book)        
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 text-gray-900 dark:text-gray-100">
                            
                            <div class="px-6 py-4">
                                <p class="text-gray-500 text-base">                                
                                    {{ $book->user->name }} - {{ $book->created_at }}
                                </p>
                                <div class="font-bold text-xl">{{ $book->title }}</div>                              
                            </div>
                            <div class="px-6 pt-2 pb-2">
                              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Pages: {{ $book->pages ?? 0}}</span>
                            </div>
                            <div class="text-right">

                                <form action="{{ route('book.destroy', $book) }}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <x-danger-button class="mt-4">
                                        {{ __('Delete') }}
                                    </x-primary-button>
                                </form>
                            </div>
                        

                    </div>         
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
