<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>

<body>
    <h1>Planets</h1>

    {{-- Check if a specific planet is available --}}
    @if(isset($planet))
        <h2>{{ $planet['name'] }}</h2>
        <p>{{ $planet['description'] }}</p>
    @else
        {{-- Display a list of all planets --}}
        <ul>
            @foreach($planets as $planet)
                <li>
                    <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>
