<h1>
    <ul>
        @forelse ($months as $month)
            <li> {{ $month }} </li> 
        @empty
            No items available
        @endforelse
    </ul>
</h1>