<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto bg-gray-100 rounded-lg shadow-md">
        <table class="table-auto w-full text-left border-collapse">
            <thead class="bg-gray-300 text-gray-700 uppercase">
                <tr class="text-center">
                    <th >ID</th>
                    <th class="px-4 py-2 border">komandos_pavadinmas</th>
                    <th class="px-2 py-2 border">Laimejimai</th>
                    <th class="px-2 py-2 border">treneris</th>
                    <th class="px-2 py-2 border">Pralaimejimai</th>
                    <th class="px-2 py-2 border">taskai</th>
                    <th class="px-2 py-2 border">Perdavimai</th>
                    <th class="px-2 py-2 border">Blokai</th>
                    <th class="px-2 py-2 border">Klaidos</th>
                    <th class="px-2 py-2 border">Geltonos Kortos</th>
                    <th class="px-2 py-2 border">Raudonos Kortos</th>
                    <th class="px-2 py-2 border">Efektyvumas</th>
                    <th class="px-2 py-2 border">Edit</th>
                    <th class="px-2 py-2 border">Delete</th>
                </tr>                
            </thead>
            <tbody class="bg-gray-200">
                @foreach ($komandos as $komanda)
                    <tr class="hover:bg-gray-300 text-center">
                        <td class="px-2 py-2 border">{{ $komanda->id }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->komandos_pavadinmas }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->Laimejimai }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->treneris }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->Pralaimejimai }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->taskai }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->Perdavimai }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->Blokai }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->Klaidos }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->GKortos }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->RKortos }}</td>
                        <td class="px-2 py-2 border">{{ $komanda->Efektyvumas }}</td>
                        <td class="px-2 py-2 border"><a  class="text-black-500 hover:underline" href="{{ route('AdminKomandaRedaguoti', ['komandos' => $komanda]) }}">Edit</a></td>
                        <td class="px-2 py-2 border">
                            <form method="POST" action="{{ route('AdminKomandaDelete', ['komandos' => $komanda]) }}">
                                @csrf
                                @method('delete')
                                <input class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700" type="submit" value="Delete" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
                
            </table>
        </div>
        <div class="mt-4">
            <a href="AdminKomandaKurti" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-900">Create</a>            
        </div>

    </div>
    

</x-app-layout>
