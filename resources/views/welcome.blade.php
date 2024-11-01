{{--segun php estos serian los comandos para importar el componente--}}
{{--@component('components.layout')--}}

{{-- según blade estos comandos tipo etiquetas funcionan igual la x apunta a la carpeta component   --}}
<x-layout meta-title="Home title" meta-description="Home description">
    <h1>Bienvenidos</h1>
{{--    seteo de la propiedad --}}
    <x-slot:sidebar>
        Home Sidebar
    </x-slot:sidebar>
</x-layout>

{{--@endcomponent--}}
