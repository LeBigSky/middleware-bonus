<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="mt-4">
                        <form action="/car" method="POST">
                            @csrf
                        {{-- car --}}
                        <x-input-label for="brand" :value="__('Marque')" />
                        <x-text-input id="brand" class="block mt-1 w-full" type="text" name="brand" :value="old('brand')" required />
                        <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                             {{-- brand --}}
                        <x-input-label for="color  " :value="__('Couleur')" />
                        <x-text-input id="color" class="block mt-1 w-full" type="color" name="color   " :value="old('color   ')" required />
                        <x-input-error :messages="$errors->get('color')" class="mt-2" />
                       
                            <x-primary-button type="submit" class="ml-4">
                                {{ __('Ajouter') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>