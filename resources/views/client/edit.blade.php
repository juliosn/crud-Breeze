<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('client.update', $client->id) }}">
                    @csrf
                    @method('patch')

                    {{ __('*Insira apenas seu Nome e CEP. Seu endereço será preenchido automaticamente*') }}
                    
                    </br>
                    </br>

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" maxlength="255" class="block mt-1 w-full" type="text" name="name" :value="old('name', $client->name)" required autofocus autocomplete="Alguém" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Address -->
                    <div class="mt-4">
                        <x-input-label for="address" :value="__('Endereço')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $client->address)" required autocomplete="Rua dom marcos barbosa" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <!-- District -->
                    <div class="mt-4">
                        <x-input-label for="district" :value="__('Bairro')" />
                        <x-text-input id="district" class="block mt-1 w-full" type="text" name="district" :value="old('district', $client->district)" required autocomplete="Cidade Tiradentes" />
                        <x-input-error :messages="$errors->get('district')" class="mt-2" />
                    </div>

                    <!-- CEP -->
                    <div class="mt-4">
                        <x-input-label for="cep" :value="__('CEP')" />
                        <x-text-input id="cep" minlength="8" maxlength="9" class="block mt-1 w-full" type="text" name="cep" :value="old('cep', $client->cep)" required autocomplete="08485-200" />
                        <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                    </div>

                    <!-- City -->
                    <div class="mt-4">
                        <x-input-label for="city" :value="__('Cidade')" />
                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', $client->city)" required autocomplete="São Paulo" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>

                    <!-- State -->
                    <div class="mt-4">
                        <x-input-label for="state" :value="__('Estado')" />
                        <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state', $client->state)" required autocomplete="SP" />
                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Editar') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
