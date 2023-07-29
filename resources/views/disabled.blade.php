@php
    $isDisabled =  false;
@endphp

<form action="">
    <button type="submit" @disabled($isDisabled)> Sumbit </button>
</form>