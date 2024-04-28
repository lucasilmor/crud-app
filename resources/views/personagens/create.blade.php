<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Novo Personagem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('personagens.store') }}">
                        @csrf

                        <div>
                            <label for="nome">{{ __('Nome') }}</label>
                            <input id="nome" class="block mt-1 w-full" type="text" name="nome" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="descrição">{{ __('Descrição') }}</label>
                            <textarea id="descrição" name="descrição" class="block mt-1 w-full" required></textarea>
                        </div>

                        <div class="mt-4">
                            <label for="categoria">{{ __('Categoria') }}</label>
                            <input id="categoria" class="block mt-1 w-full" type="text" name="categoria" required />
                        </div>

                        <div class="mt-4">
                            <label for="imagem">{{ __('Imagem') }}</label>
                            <input id="imagem" class="block mt-1 w-full" type="text" name="imagem" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" >
                                {{ __('Adicionar Personagem') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>