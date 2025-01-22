<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto bg-gray-100 rounded-lg shadow-md">
            <table class="table-auto w-full text-left border-collapse">
                <thead class="bg-gray-300 text-gray-700 uppercase">
                    <tr class=" text-center">
                        <th class="px-4 py-2 border">Vardas</th>
                        <th class="px-4 py-2 border">Pavardė</th>
                        <th class="px-4 py-2 border">Komanda</th>
                        <th class="px-4 py-2 border">Taškai</th>
                        <th class="px-4 py-2 border">Perdavimai</th>
                        <th class="px-4 py-2 border">Blokai</th>
                        <th class="px-4 py-2 border">ACE</th>
                        <th class="px-4 py-2 border">Klaidos</th>
                        <th class="px-4 py-2 border">Geltonos Korteles</th>
                        <th class="px-4 py-2 border">Raudonos Korteles</th>
                        <th class="px-4 py-2 border">Efektyvumas</th>
                        <th class="px-4 py-2 border">Edit</th>
                        <th class="px-4 py-2 border">Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    @foreach ($Zaidejas as $zaidejai)
                    <tr class="hover:bg-gray-300 text-center">
                        <td class="px-4 py-2 border">{{ $zaidejai->vardas }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->pavarde }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->komanda->komandos_pavadinmas }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->taskai }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->perdavimai }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->blokai }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->ACE }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->klaidos }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->GKortos }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->RKortos }}</td>
                        <td class="px-4 py-2 border">{{ $zaidejai->efektyvumas }}</td>
                        <td class="px-4 py-2 border">
                            <a href="{{ route('AdminZaidejaiRedaguoti', ['zaidejas' => $zaidejai]) }}" 
                               class="text-black-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-4 py-2 border">
                            <form method="POST" action="{{ route('AdminZaidejaiDelete', ['zaidejas' => $zaidejai]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="AdminZaidejaiKurti" 
               class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-900">
                Create
            </a>
        </div>
    </div>
</x-app-layout>
