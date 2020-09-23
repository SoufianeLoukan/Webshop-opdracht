<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

            <a href="{{route('product.create')}}"
            class="float-right shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            New game
        </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Publisher</th>
                        <th class="px-4 py-2">Developer</th>
                        <th class="px-4 py-2"></th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($games as $game)

                        <tr>
                            <td class="border px-4 py-2">{{$game->title}}</td>
                            <td class="border px-4 py-2">€{{$game->price}}</td>
                            <td class="border px-4 py-2">{{$game->publisher}}</td>
                            <td class="border px-4 py-2">{{$game->developer}}</td>
                            <td class="border px-4 py-2"><a href="{{route('product.edit', $game->id)}}">Edit</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
