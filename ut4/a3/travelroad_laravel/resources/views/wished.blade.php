<h2>Places I'd Like to Visit</h2>
<ul>
    @foreach ($wished as $place)
        <li>{{ $place->name }}</li>
    @endforeach
</ul>
