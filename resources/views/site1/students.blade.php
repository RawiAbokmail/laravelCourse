<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Site1</title>
</head>

<body>
{{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores odit maiores corrupti minus accusamus iste consectetur quia, porro quos dicta dolor harum assumenda ullam tempora consequuntur earum ut? Aliquid, debitis?</p> --}}

{!! $text !!}

<h1>Students of {{ $teacher }}</h1>
    @if(count($students) > 0)
    <ul>
        @foreach($students as $std)
        <li>{{ $std }}</li>
        @endforeach
    </ul>
    @else
    <p>you dont have any students</p>
    @endif

    <a href="{{ route('site1.index') }}">Home</a>
    <a href="{{ route('site1.about') }}">About</a>
    <a href="{{ route('site1.contact') }}">Contact</a>
</body>

</html>
