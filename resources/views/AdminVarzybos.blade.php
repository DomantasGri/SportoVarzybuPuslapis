<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto bg-gray-100 rounded-lg shadow-md">
            <table class="table-auto w-full text-left border-collapse">
                <thead class="bg-gray-300 text-gray-700 uppercase">
                    <tr class="text-center">
                        <th class="px-4 py-2 border">Komanda 1</th>
                        <th class="px-4 py-2 border">Komanda 2</th>
                        <th class="px-4 py-2 border">Data</th>
                        <th class="px-4 py-2 border">Laikas</th>
                        <th class="px-4 py-2 border">Edit</th>
                        <th class="px-4 py-2 border">Delete</th>
                    </tr>                
                </thead>
                <tbody class="bg-gray-200">
                    @foreach ($varzybos as $varzyba)
                    <tr class="hover:bg-gray-300 text-center">
                        <td class="px-4 py-2 border" >{{ $varzyba->komanda1->komandos_pavadinmas }}</td>
                        <td class="px-4 py-2 border">{{ $varzyba->komanda2->komandos_pavadinmas}}</td>
                        <td class="px-4 py-2 border">{{ $varzyba->Varzybu_data }}</td>
                        <td class="px-4 py-2 border">{{ $varzyba->Varzybu_laikas }}</td>
                        <td class="px-4 py-2 border"><a  class="text-black-500 hover:underline" href="{{ route('AdminVarzybosRedaguoti',['varzybos' => $varzyba ->id]) }}">Edit</a></td>
                        <td class="px-4 py-2 border">
                            <form method="POST" action="{{ route('AdminVarzybosDelete',['varzybos' => $varzyba]) }}">
                                @csrf
                                @method('delete')
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
        <div class="mt-4">
            <a href="AdminVarzybosKurti" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-900">Create</a>            
        </div>

    </div>
</x-app-layout>