@extends('base')

@section('content')
    <div class="flex row gap--2 p--5">
        @if(Auth::guest())
            <a href="{{ route('login') }}" class="btn btn--small">Login</a>
        @else
            <x-logout></x-logout>
        @endif
    </div>

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
        >{{ session('danger') }}
        </p>
    @endif
@endsection
