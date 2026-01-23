<h2>Places I've Already Been To</h2>
<ul>
    @foreach ($visited as $place)
        <li>{{ $place->name }}</li>
    @endforeach
</ul>

<a href="{{ route('travelroad') }}">Back home</a>
