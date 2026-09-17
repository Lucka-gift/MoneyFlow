@extends("auth.auth")
<div class=" text-white flex ">
    <div class=" bg-indigo-950 w-[20%] py-8">
        <x-sidebar  />
    </div>
    <div class="side  text-primary w-[80%] relative bg-gray-200">
        <x-header />
    @yield("dashboard")
    </div>
</div>

