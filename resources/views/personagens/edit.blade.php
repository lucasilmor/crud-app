<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Personagem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('personagens.update', $personagem->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <label for="nome" class="block font-medium text-sm text-gray-700">Nome</label>
                            <input id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="nome" 
                            value="{{ $personagem->nome }}" required autofocus />
                        </div>

                        <div class="mt-4">
                        <label for="descricao" class="block font-medium text-sm text-gray-700">Descrição</label>
                        <textarea id="descricao" class="form-textarea rounded-md shadow-sm mt-1 block w-full" name="descricao" required>{{ $personagem->descrição }}</textarea>
                    </div>

                        <div class="mt-4">
                            <label for="categoria" class="block font-medium text-sm text-gray-700">Categoria</label>
                            <input id="categoria" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="categoria" value="{{ $personagem->categoria }}" required />
                        </div>

                        <div class="mt-4">
                            <label for="imagem" class="block font-medium text-sm text-gray-700">Imagem</label>
                            <input id="imagem" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="imagem" value="{{ $personagem->imagem }}" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit">
                                {{ __('Atualizar Personagem') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>