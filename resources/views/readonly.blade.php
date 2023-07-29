@php
    $isReadOnly = false;
@endphp

<form action="">
    <input type="text" name = "username" @readonly($isReadOnly)>
</form>