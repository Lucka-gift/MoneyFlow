@props(
    [
        'bg' => 'bg-white',
        'fontsize' => 'text-3xl',
        'size' => 'w-10 h-10'
    ]
)

<div class="flex items-center gap-4">
    <div class="icone">
        <img class="object-cover {{$size}}"  src="{{asset('assets/logo.test.png')}}">
    </div>
    <div class="text-white {{$fontsize}} font-bold">
        Money<span class="text-violet-600">Flow</span>
    </div>
</div>

