<div>
    <h1> this is header component </h1>
    <h3> welcome to, {{ $name }} </h3>
    <h3> fruits are: </h3>
    <ul>
        @foreach( $fruits as $name)
            <li>{{ $item}}</li>
        @endforeach
    </ul>
</div>