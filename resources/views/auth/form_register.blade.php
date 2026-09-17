@extends("auth.login")
@section("formulaire")
    <div class="title mb-4">
        <h1 class="text-gray-900 text-2xl font-extrabold tracking-tight">
            Créer un compte
        </h1>
        <h3 class="text-gray-500 text-sm mt-1">Rejoignez MoneyFlow dès maintenant</h3>
    </div>

    <form action="" class="formulaire_login flex flex-col gap-5 py-4">
        <div class="input_fomulaire relative flex flex-col gap-1.5">
            <label class="text-sm font-semibold text-gray-700" for="">Nom Complet</label>
            <div class="relative flex items-center">
                <input type="text" placeholder="Jean Richard" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all pr-12">
                <i class="fa-solid fa-user text-gray-400 text-sm absolute right-4 pointer-events-none"></i>
            </div>
        </div>

        <div class="input_fomulaire relative flex flex-col gap-1.5">
            <label class="text-sm font-semibold text-gray-700" for="email">Email</label>
            <div class="relative flex items-center">
                <input type="email" placeholder="nom@exemple.com" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all pr-12">
                <i class="fa-solid fa-envelope text-gray-400 text-sm absolute right-4 pointer-events-none"></i>
            </div>
        </div>

        <div class="input_fomulaire relative flex flex-col gap-1.5">
            <label class="text-sm font-semibold text-gray-700" for="password">Mot de passe</label>
            <div class="relative flex items-center">
                <input type="password" placeholder="••••••••" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all pr-12">
                <i class="fa-solid fa-lock text-gray-400 text-sm absolute right-4 cursor-pointer hover:text-gray-600"></i>
            </div>
        </div>

        <div class="input_form mix flex items-start gap-2 pt-1">
            <div class="register flex items-start gap-2 text-gray-600">
                <input type="checkbox" name="" id="terms" class="mt-1 w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <label for="terms" class="txt text-xs leading-relaxed cursor-pointer">
                    J'accepte les <span class="text-indigo-600 font-medium hover:underline">conditions d'utilisation</span> et les <span class="text-indigo-600 font-medium hover:underline">politiques de confidentialité</span>.
                </label>
            </div>
        </div>

        <div class="btn flex flex-col pt-2">
            <button class="text-center py-3.5 bg-indigo-950 hover:bg-indigo-900 text-white font-medium rounded-xl w-full shadow-lg shadow-indigo-950/20 transition-all duration-200">S'inscrire</button>
        </div>

        <div class="have text-center text-sm text-gray-600 pt-1">
            J'ai déjà un compte ? <a href="{{route('login')}}" class="text-indigo-600 font-semibold hover:underline">Se connecter</a>
        </div>
    </form>
@endsection
