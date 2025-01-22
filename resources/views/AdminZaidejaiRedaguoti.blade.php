<x-app-layout>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700 text-center">Redaguoti zaideja</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('AdminZaidejaiRedaguoti.update', ['zaidejas' => $zaidejas]) }}">
            @csrf 
            @method('PUT')
            <div>
                <label class="block text-gray-700 font-semibold mt-2">vardas</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="vardas" placeholder="vardas"value="{{ $zaidejas->vardas }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">pavarde</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="pavarde" placeholder="pavarde" value="{{ $zaidejas->pavarde }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">Komanda</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" name="Komanda_id" class="form-control">
                    <option value="">Pasirinkite komandą</option>
                    @foreach($komandos as $team)
                        <option value="{{ $team->id }}" 
                            {{ $zaidejas->Komanda_id == $team->id ? 'selected' : '' }}>
                            {{ $team->komandos_pavadinmas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">taškai</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="taskai" placeholder="taškai" value="{{ $zaidejas->taskai }}">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">perdavimai</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="perdavimai" placeholder="perdavimai"  value="{{ $zaidejas->perdavimai }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">blokai</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="blokai" placeholder="blokai"  value="{{ $zaidejas->blokai }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">klaidos</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="klaidos" placeholder="klaidos" value="{{ $zaidejas->klaidos }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">ACE</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="ACE" placeholder="ACE" value="{{ $zaidejas->ACE }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">GKortos</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="GKortos" placeholder="GKortos" value="{{ $zaidejas->GKortos }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">RKortos</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="RKortos" placeholder="RKortos" value="{{ $zaidejas->RKortos }}"/>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mt-2">efektyvumas</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="efektyvumas" placeholder="efektyvumas" value="{{ $zaidejas->efektyvumas }}"/>
            </div>
            <div class="mt-4">
                <input  class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-900 focus:ring-2 focus:ring-gray-500" type="submit" value="Redaguoti zaideja" />
            </div>
        </form>
    </div>
    
</x-app-layout>