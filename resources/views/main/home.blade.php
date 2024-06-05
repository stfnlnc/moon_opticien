@extends('base')

@section('content')
    <x-logout></x-logout>
    @if(session('success'))
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="alert alert--success"
        >{{ session('success') }}</p>
    @endif
    @if(session('danger'))
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="alert alert--danger"
        >{{ session('danger') }}</p>
    @endif
@endsection
