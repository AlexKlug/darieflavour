<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('elements.head')
</head>
<body>

@include('elements.menu')

@foreach ($Article as $fA)
    <h1>{{ $fA->overskrift }}</h1>
@endforeach

@include('elements.footer')

</body>
</html>
