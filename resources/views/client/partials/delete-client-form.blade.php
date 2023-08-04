<section class="space-y-6">
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-client-deletion{{$client->id}}')"
    >{{ __('Deletar') }}</x-danger-button>

    <x-modal name="confirm-client-deletion{{$client->id}}" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('client.destroy', $client->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg text-left font-medium text-gray-900">
                {{ __('Você tem certeza de que deseja deletar esse cliente?') }}
            </h2>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Deletar') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
