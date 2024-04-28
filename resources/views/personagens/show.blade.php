<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Personagem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">{{ $personagem->nome }}</h1>
                    <p class="text-gray-700 mb-2">{{ $personagem->descrição }}</p>
                    <p class="text-gray-700 mb-2">Categoria: {{ $personagem->categoria }}</p>
                    <img src="{{ $personagem->imagem }}" alt="{{ $personagem->nome }}" class="mb-2">
                    
                    <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('dashboard') }}" 
                    class="text-sm text-gray-700 bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded">Voltar</a></div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>