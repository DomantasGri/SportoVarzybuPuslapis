<x-app-layout>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700 text-center">Redaguoti Varzybas</h1>
        <form method="post" action="{{ route('AdminVarzybosRedaguoti.update', $varzybos) }}">
            @csrf
            @method('put')
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Komanda 1</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" name="Komanda_1" class="form-control">  <!-- Changed from Komanda_id -->
                    <option value="">Pasirinkite komandą</option>
                    @foreach($komandos as $team)
                    <option value="{{ $team->id }}" 
                        {{ $varzybos->Komanda_1 == $team->id ? 'selected' : '' }}>
                        {{ $team->komandos_pavadinmas }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Komanda 2</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" name="Komanda_2" class="form-control">  <!-- Changed from Komanda_id -->
                    <option value="">Pasirinkite komandą</option>
                    @foreach($komandos as $team)
                    <option value="{{ $team->id }}" 
                        {{ $varzybos->Komanda_2 == $team->id ? 'selected' : '' }}>
                        {{ $team->komandos_pavadinmas }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Varzybu laikas</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="time" name="Varzybu_laikas" value="{{ $varzybos->Varzybu_laikas }}" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Varzybu data</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="date" name="Varzybu_data" value="{{ $varzybos->Varzybu_data }}" />
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-900 focus:ring-2 focus:ring-gray-500">Išsaugoti</button>
            </div>
        </form>
    </div>
</x-app-layout>