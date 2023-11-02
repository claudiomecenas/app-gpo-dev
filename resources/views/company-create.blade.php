<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listagem de Empresas') }}
        </h2>
    </x-slot>

    
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
                <div class="w-full mx-auto bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    
                    
                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf      
                            <div class="w-full h12 px-4 py-5 sm:p-6">
                                <div class="w-full">
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="name" value="{{ __('Nome da empresa') }}" />
                                        <x-input id="na" type="text" name="name" class="mt-1 block w-full" wire:model="state.name" autofocus />
                                        <x-input-error for="name" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="cnpj" value="{{ __('CNPJ') }}" />
                                        <x-input id="cnpj" type="text" name="cnpj" class="mt-1 block w-full" wire:model="state.cnpj" autofocus />
                                        <x-input-error for="cnpj" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="email" value="{{ __('E-mail') }}" />
                                        <x-input id="email" type="text" name="email" class="mt-1 block w-full" wire:model="state.email" autofocus />
                                        <x-input-error for="email" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="zipCode" value="{{ __('CEP') }}" />
                                        <x-input id="zipCode" type="text" name="zipCode" class="mt-1 block w-full" wire:model="state.zipCode" autofocus />
                                        <x-input-error for="zipCode" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="address" value="{{ __('Endereço') }}" />
                                        <x-input id="address" type="text" name="address" class="mt-1 block w-full" wire:model="state.address" autofocus />
                                        <x-input-error for="address" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="city" value="{{ __('Cidade') }}" />
                                        <x-input id="city" type="text" name="city" class="mt-1 block w-full" wire:model="state.city" autofocus />
                                        <x-input-error for="city" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="state" value="{{ __('UF') }}" />
                                        <x-input id="state" type="text" name="state" class="mt-1 block w-full" wire:model="state.state" autofocus />
                                        <x-input-error for="state" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="country" value="{{ __('País') }}" />
                                        <x-input id="country" type="text" name="country" class="mt-1 block w-full" wire:model="state.country" autofocus />
                                        <x-input-error for="country" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="linkedin" value="{{ __('Linkedin') }}" />
                                        <x-input id="linkedin" type="text" name="linkedin" class="mt-1 block w-full" wire:model="state.linkedin" autofocus />
                                        <x-input-error for="linkedin" class="mt-2" />
                                    </div>

                                    <div class="mt-4 col-span-6 sm:col-span-4">
                                        <x-label for="twitter" value="{{ __('Twitter') }}" />
                                        <x-input id="twitter" type="text" name="twitter" class="mt-1 block w-full" wire:model="state.twitter" autofocus />
                                        <x-input-error for="description" class="mt-2" />
                                    </div>
                                    
                                    <button class="mt-4 py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" wire:click="store">Salvar</button>
                                </div>
                            </div>
                    </form>


                </div>
            </div>
        </div>
   
</x-app-layout>
