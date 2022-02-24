@extends('layouts.default')

@section('content')

    <div class="">
        @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/home') }}">داشبورد</a>
                @else
                    <a href="{{ route('login') }}">ورود</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">ثبت نام</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            
        </div>
    </div>

@endsection

    