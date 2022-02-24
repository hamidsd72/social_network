<body style="background-color: white">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row m-4">
        <div class="col-lg d-none d-lg-block" style="background-image: url('login.jpg');border-bottom-left-radius: 7.5%;border-top-left-radius: 7.5%;height: auto"></div>
        <div class="col-lg col-md-10 mx-auto">
            <h3 class="m-3 mt-4 pr-5 text-right">{{ __('my app') }}</h3>
                <div class="mb-5 text-right">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-5 ml-5 mr-5">
                            <label for="email">{{ __('آدرس ایمیل') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="ml-5 mr-5 mb-5 mt-4">
                            <label for="password">{{ __('رمز عبور') }}</label>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 ml-2 mr-3">
                            <div class="col-md">
                                <button type="submit" class="btn btn-primary pr-4 pl-4 mt-2">
                                    {{ __('ورود') }}
                                </button>
                            </div>
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label pr-4 mb-2" for="remember">
                                        {{ __('منو در سیستم نگهدار') }}
                                    </label>    
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبورم رو فراموش کردم') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
