<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title'}}</title>
    <meta name="description" content="{{ $metaDescription ?? `Default description` }}">
</head>
<body>

{{--@include('components.nav')--}}
<x-partials.nav />
{{-- al utilizar blade,  slot es una variable que incluira todo lo que pogamos en el archivo al que apunta,     --}}
{{ $slot }}
{{-- Si esta la variable $sidebar seteada en la vista welcome que aparezca --}}
@isset($sidebar)
    <div>
        <h3>Sidebar</h3>
        <div>{{$sidebar}}</div>
        variable a setear
    </div>
@endisset

</body>
</html>
