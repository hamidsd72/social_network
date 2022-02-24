<nav class="navbar fixed-bottom" style="background-color: black">
    <a class="navbar-brand btn btn-dark ml-5 pr-lg-5 pl-lg-5 
    @if (Route::is('home')){{ __('active') }}@endif" @unless (Route::is('home')) href="{{ route('home') }}" @endunless>داشبورد</a>
    <a class="navbar-brand btn btn-dark pr-lg-5 pl-lg-5 
    @if (Route::is('follower')){{ __('active') }}@endif" @unless (Route::is('follower')) href="{{ route('follower') }}" @endunless>فالوور ها</a>
    <a class="navbar-brand" href="{{ route('new_post') }}"><img src="login.jpg" class="rounded-circle" width="40px" height="40px" alt="+"></a>
    <a class="navbar-brand btn btn-dark pr-lg-5 pl-lg-5 
    @if (Route::is('site')){{ __('active') }}@endif" @unless (Route::is('site')) href="{{ route('site') }}" @endunless>سایت ها</a>
    <a class="navbar-brand btn btn-dark mr-5 pr-lg-5 pl-lg-5 
    @if (Route::is('group')){{ __('active') }}@endif" @unless (Route::is('group')) href="{{ route('group') }}" @endunless>ارتباطات</a>
</nav>