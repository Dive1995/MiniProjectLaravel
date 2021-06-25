<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                    
                        @foreach($feedback as $item)
                        <div class="p-6 bg-white border-b border-gray-300">
                            <div class="space-y-2 ">
                                <h2 class="text-gray-800 font-bold text-2xl capitalize">{{$item->title}}</h2>
                                <p class="font-thin text-sm text-gray-500 border-b border-gray-200">on {{$item->created_at}}</p>
                                <p class="text-gray-700 leading-6">{{$item->subject}}</p>
                            </div>
                        </div>
                        @endforeach
                    
                
            </div>
        </div>
    </div>
</x-app-layout>