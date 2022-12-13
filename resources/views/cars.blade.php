<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>
    @include('layouts.flash')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="mt-4">
                        <!-- component -->
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden ">
                                        <table class="min-w-full text-center ">
                                            <thead class="border-b">
                                                @foreach ($cars as $car)
                                                    <tr>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4">
                                                            Voiture N°
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4">
                                                            Marque
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4">
                                                            Couleur
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4">
                                                            supprimer
                                                        </th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b">
                                                    <td
                                                        class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                        {{ $car->id }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $car->brand }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <div class=""
                                                            style="width: 50px; height: 30px; background-color: {{ $car->color }}";>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                   <form action="car/{{ $car->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-danger-button type="submit" class="ml-4">
                                                        {{ __('Delete') }}
                                                    </x-danger-button>
                                                   </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
