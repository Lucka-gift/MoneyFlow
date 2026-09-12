@extends('auth.login')
@section('formulaire')

    <div class="title">
        <h1 class="text-primary text-2xl font-bold">
            Connexion
        </h1>
        <h3 class="text-primary font-bold">Prenez le contrôle de vos finances</h3>
    </div>
    <form action="" class="formulaire_login flex flex-col  gap-8 py-8">
        <div class="input_fomulaire">
            <label for="">Email</label>
            <input type="text" placeholder="Email">
            <i class="fa-solid fa-envelope text-xl cursor-pointer absolute right-8 top-[50%] transform translate-x-1/2 translate-y-1/2"></i>
        </div>
        <div class="input_fomulaire relative">
            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Mot de passe">
            <i class="fa-solid fa-lock text-xl cursor-pointer absolute right-8 top-[50%] transform translate-x-1/2 translate-y-1/2"></i>
        </div>
        <div class="input_form mix flex items-center justify-between">
            <div class="register flex items-center gap-1.5 text-gray">
                <input type="checkbox" name="" id="">
                <div class="txt">Afficher</div>
            </div>

            <div class="forgot">
                <a href="#">Mot de passe oublié?</a>
            </div>
        </div>
        <div class="btn flex flex-col gap-8">
            <button class="text-center py-4 bg-blue-950 text-white rounded-xl w-full">Se connecter</button>
            <button class="text-center py-4 border border-black text-primary rounded-xl w-full flex items-center justify-center gap-4"><i class="fa-brands fa-google text-xl"></i>
    <span>Continuer avec Google</span></button>
        </div>
        <div class="have text-center font-bold">Je n'ai pas encore de compte ? <a href="{{route('register')}}">S'inscrire</a></div>
    </form>

@endsection
