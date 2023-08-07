<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">

                    @include('client.partials.alert-message')

                    <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                        <thead>
                            <tr class="bg-green-400">
                                <th class="px-4 py-2 border" scope="col">Nome</th>
                                <th class="px-4 py-2 border" scope="col">CEP</th>
                                <th class="px-4 py-2 border" scope="col">Endereço</th>
                                <th class="px-4 py-2 border" scope="col">Bairro</th>
                                <th class="px-4 py-2 border" scope="col">Cidade</th>
                                <th class="px-4 py-2 border" scope="col">Estado</th>
                                <th class="px-4 py-2 border" scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if (!empty($clients[0]))
                            @foreach ($clients as $client)
                            <tr>
                                <td class="px-4 py-2 border">{{$client->name}}</td>
                                <td class="px-4 py-2 border">{{$client->cep}}</td>
                                <td class="px-4 py-2 border">{{$client->address}}</td>
                                <td class="px-4 py-2 border">{{$client->district}}</td>
                                <td class="px-4 py-2 border">{{$client->city}}</td>
                                <td class="px-4 py-2 border">{{$client->state}}</td>
                                <td class="px-6 py-3 border">
                                    <x-link-button :href="route('client.edit', $client->id)">
                                        {{ __('Editar') }}
                                    </x-link-button>

                                    </br>
                                    </br>

                                    @include('client.partials.delete-client-form')
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td class="px-4 py-2 border text-center text-red-500" colspan="7">Nenhum cliente cadastrado.</td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>