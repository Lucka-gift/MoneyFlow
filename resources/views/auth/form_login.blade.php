@extends('auth.login')
@section('formulaire')

    <div class="title mb-4">
        <h1 class="text-gray-900 text-2xl font-extrabold tracking-tight">
            Connexion
        </h1>
        <h3 class="text-gray-500 text-sm mt-1">Prenez le contrôle de vos finances</h3>
    </div>

    <form action="{{route('login.check')}}" method="post" class="formulaire_login flex flex-col gap-5 py-4">
        @csrf
        <div class="input_fomulaire relative flex flex-col gap-1.5">
            <label class="text-sm font-semibold text-gray-700" for="">Email</label>
            <div class="relative flex items-center">
                <input type="email" name="mail" placeholder="nom@exemple.com" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all pr-12">
                <i class="fa-solid fa-envelope text-gray-400 text-sm absolute right-4 pointer-events-none"></i>
            </div>
        </div>

        <div class="input_fomulaire relative flex flex-col gap-1.5">
            <label class="text-sm font-semibold text-gray-700" for="password">Mot de passe</label>
            <div class="relative flex items-center">
                <input type="password" name="pass" placeholder="••••••••" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all pr-12">
                <i class="fa-solid fa-lock text-gray-400 text-sm absolute right-4 cursor-pointer hover:text-gray-600"></i>
            </div>
        </div>

        <div class="input_form mix flex items-center justify-between pt-1">
            <div class="register flex items-center gap-2 text-gray-600">
                <input type="checkbox" name="" id="show-password" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <label for="show-password" class="txt text-xs cursor-pointer select-none">Afficher</label>
            </div>

            <div class="forgot">
                <a href="#" class="text-xs text-indigo-600 font-medium hover:underline">Mot de passe oublié ?</a>
            </div>
        </div>

        <div class="btn flex flex-col gap-3 pt-2">
            <button type="submit" class="text-center py-3.5 bg-indigo-950 hover:bg-indigo-900 text-white font-medium rounded-xl w-full shadow-lg shadow-indigo-950/20 transition-all duration-200">Se connecter</button>
            <a href="#" class="text-center py-3.5 border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium rounded-xl w-full flex items-center justify-center gap-3 transition-all duration-200">
                <i class="fa-brands fa-google text-lg text-red-500"></i>
                <span class="text-sm">Continuer avec Google</span>
            </a>
        </div>

        <div class="have text-center text-sm text-gray-600 pt-1">
            Je n'ai pas encore de compte ? <a href="{{route('register')}}" class="text-indigo-600 font-semibold hover:underline">S'inscrire</a>
        </div>
    </form>

@endsection
