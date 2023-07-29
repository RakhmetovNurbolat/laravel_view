@php
    $isRequired = true;
@endphp

<form action="">
    <input type="text" name = "email" @required($isRequired)>
</form>