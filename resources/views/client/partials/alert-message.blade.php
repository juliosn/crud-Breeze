@if (!empty(session('msg'))) 
    <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
        class="mb-3 block rounded-lg p-3 bg-green-600">

        <p class="m-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
            {{ session('msg') }}
        </p>
    </div>
@endif