<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome back {{ Auth::user()->name}}
        </h2>
    </x-slot>

  
</x-app-layout>
