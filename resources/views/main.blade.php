@include('header')
@includeif('sidebar')

@php
    $hasNotification = false;
@endphp

@includeWhen($hasNotification, 'notification')