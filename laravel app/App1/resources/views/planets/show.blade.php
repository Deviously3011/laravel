<!-- resources/views/planets/show.blade.php -->

@if(isset($planet))
    <h2>{{ $planet->name }}</h2>
    <p>{{ $planet->description }}</p>
@else
    <p>Planet not found</p>
@endif
