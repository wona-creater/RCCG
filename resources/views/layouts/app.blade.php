@if (Auth::user()->role == 'user')
    <x-user></x-user>
@elseif(Auth::user()->role == 'admin')
    <x-admin></x-admin>
@endif
{{ $slot }}
