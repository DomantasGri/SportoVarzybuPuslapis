<x-app-layout>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700 text-center">Kurti varžybas</h1>
        <form method="post" action="{{ route('AdminVarzybos.store') }}" class="space-y-6">
            @csrf
            @method('post')
            <div>
                <label for="Komanda_1" class="block text-gray-700 font-semibold mt-2">Komanda 1</label>
                <select name="Komanda_1" id="Komanda_1" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <option value="">Pasirinkite komandą 1</option>
                    @foreach($komandos as $team)
                        <option value="{{ $team->id }}">{{ $team->komandos_pavadinmas }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="Komanda_2" class="block text-gray-700 font-semibold mt-2">Komanda 2</label>
                <select name="Komanda_2" id="Komanda_2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <option value="">Pasirinkite komandą 2</option>
                    @foreach($komandos as $team)
                        <option value="{{ $team->id }}">{{ $team->komandos_pavadinmas }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="Varzybu_laikas" class="block text-gray-700 font-semibold mt-2">Varžybų laikas</label>
                <input type="time" name="Varzybu_laikas" id="Varzybu_laikas" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>
            <div>
                <label for="Varzybu_data" class="block text-gray-700 font-semibold mt-2">Varžybų data</label>
                <input type="date" name="Varzybu_data" id="Varzybu_data" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-900 focus:ring-2 focus:ring-gray-500">
                    Sukurti
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
