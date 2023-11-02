<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Segmento de Mercado') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('market-segment.update', $marketSegment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex mb-4">
                        <div class="w-3/4 h12 px-4 py-5 sm:p-6">
                            <div class="w-full">
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="description" value="{{ __('Edite a Descrição') }}" />
                                    <x-input id="description" type="text" name="description" value="{{ $marketSegment->description }}" class="mt-1 block w-full" wire:model="state.description" autofocus />
                                    <x-input-error for="description" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="w-1/4 m-6 h12 px-4 py-3 sm:p-6">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" wire:click="store">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
