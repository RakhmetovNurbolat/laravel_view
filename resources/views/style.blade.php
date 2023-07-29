@php
    $isRed = ($color == 'red');
    $isBlue = !$isRed;
@endphp


<div
    @style([
        'color: red'    => $isRed,
        'color: blue'   => $isBlue, //or  !$isRed
    ])
>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis autem quos dolor voluptatum architecto placeat quas! Quas maiores culpa, accusamus numquam ducimus, praesentium asperiores maxime, sit laborum obcaecati quod labore!
</div>