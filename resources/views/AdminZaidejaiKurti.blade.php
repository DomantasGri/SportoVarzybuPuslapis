<x-app-layout>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700">Priregistruoti zaideja</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('AdminZaidejai.store') }}">
            @csrf 
            @method('post')
            <div>
                <label class="block text-gray-700 font-semibold mt-2">vardas</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="vardas" placeholder="vardas" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">pavarde</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="pavarde" placeholder="pavarde" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Komanda</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" name="Komanda_id" class="form-control">
                    <option value="">Pasirinkite komandą</option>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->komandos_pavadinmas }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">taskai</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="taskai" placeholder="taskai" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">perdavimai</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="perdavimai" placeholder="perdavimai" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">blokai</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="blokai" placeholder="blokai" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">klaidos</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="klaidos" placeholder="klaidos" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">ACE</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="ACE" placeholder="ACE" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Geltonos Korteles</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="GKortos" placeholder="GKortos" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Raudonos Korteles</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="RKortos" placeholder="RKortos" />
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">efektyvumas</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="efektyvumas" placeholder="efektyvumas" />
            </div>
            <div class="mt-4">
                <input  class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-900 focus:ring-2 focus:ring-gray-500" type="submit" value="Sukurti nauja žaidėją" />
            </div>
        </form>
    </div>

</x-app-layout>