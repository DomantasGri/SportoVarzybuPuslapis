<x-app-layout>
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-center text-2xl font-bold mb-4 text-gray-700">Redagavimas</h1>
        <form method="post" action="{{ route('AdminKomandaRedaguoti.update', ['komandos' => $komandos]) }}">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-gray-700 font-semibold mt-2">komandos_pavadinmas</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="komandos_pavadinmas" placeholder="komandos_pavadinmas"  value="{{ $komandos->komandos_pavadinmas }}" />
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Laimejimai</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Laimejimai" placeholder="Laimejimai" value="{{ $komandos->Laimejimai }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">treneris</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="treneris" placeholder="treneris" value="{{ $komandos->treneris }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Pralaimejimai</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Pralaimejimai" placeholder="Pralaimejimai" value="{{ $komandos->Pralaimejimai }}" />
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">taskai</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="taskai" placeholder="taskai"  value="{{ $komandos->taskai }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Perdavimai</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Perdavimai" placeholder="Perdavimai"  value="{{ $komandos->Perdavimai }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Blokai</label>

            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Blokai" placeholder="Blokai" value="{{ $komandos->Blokai }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Klaidos</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Klaidos" placeholder="Klaidos" value="{{ $komandos->Klaidos }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Ace</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Ace" placeholder="Ace" value="{{ $komandos->ACE }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">GKortos</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="GKortos" placeholder="GKortos" value="{{ $komandos->GKortos }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">RKortos</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="RKortos" placeholder="RKortos" value="{{ $komandos->RKortos }}"/>
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mt-2">Efektyvumas</label>

            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" type="text" name="Efektyvumas" placeholder="Efektyvumas" value="{{ $komandos->Efektyvumas }}"/>
        </div>
        <div class="mt-4">
            <input class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-900 focus:ring-2 focus:ring-gray-500" type="submit" value="Redaguoti"/>
        </div>
        </form>
    </div>
</x-app-layout>    
