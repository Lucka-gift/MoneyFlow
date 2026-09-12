
@extends("auth.auth")
@section("content")
    <div class="flex m-0">
        <div class="bg-primary w-[40%]  flex flex-col items-center py-contour">
            <x-logo  size="w-20 h-20"/>
            <h3 class="text-white font-bold">Prenez le contrôle de vos finances</h3>
            <p class="my-10 text-center text-[#ffffff8a] text-sm pb-13 px-20">Une meilleure gestion aujourd'hui, un plan pour l'avenir.</p>
            <div class="image_illustration "><img class="object-cover" src="{{asset('assets/illustration.png')}}" alt=""></div>
        </div>
        <div class=" w-[60%]  mt-contour mx-30 bg-white ">
            @yield("formulaire")
        </div>
    </div>
@endsection
