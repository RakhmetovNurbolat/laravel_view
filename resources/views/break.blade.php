<h1>
    <ul>
        @foreach ($months as $month)
            @break ($month == 'May')
            <li> {{ $month  }} </li>
        @endforeach
    </ul>
</h1>