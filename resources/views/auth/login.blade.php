@extends("auth.auth")
@section("content")
    <div class="flex min-h-screen m-0 bg-white">
        <!-- Panneau de gauche (Branding) -->
        <div class="bg-indigo-950 w-1/2 flex flex-col items-center justify-between py-12 px-10 relative overflow-hidden">
            <div class="flex flex-col items-center z-10 pt-4">
                <x-logo size="w-16 h-16" />
                <h3 class="text-white font-bold text-lg mt-4 tracking-wide">Prenez le contrôle de vos finances</h3>
                <p class="mt-3 text-center text-indigo-200/70 text-sm max-w-sm leading-relaxed">
                    Une meilleure gestion aujourd'hui, un plan pour l'avenir.
                </p>
            </div>

            <div class="image_illustration z-10 my-6">
                <img class="object-cover max-w-sm w-full drop-shadow-2xl" src="{{asset('assets/illustration.png')}}" alt="Illustration MoneyFlow">
            </div>

            <!-- Élément de design décoratif discret en fond -->
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-indigo-900/20 rounded-full blur-3xl pointer-events-none"></div>
        </div>

        <!-- Panneau de droite (Formulaire) -->
        <div class="w-1/2 flex items-center justify-center px-12 py-12">
            <div class="w-full max-w-md">
                @yield("formulaire")
            </div>
        </div>
    </div>
@endsection
