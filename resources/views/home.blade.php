@extends('layouts.default')
@section('content')
    @include('jquery_search')
    @include('views.navbar')

    <div class="container text-center text-white">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-3">
                        <h3>{{Auth::user()->name}}</h3>
                        <a href="{{Auth::user()->avatar ? $user->avatar : 'login.jpg' }}"><img class="rounded-circle mt-2" src="{{Auth::user()->avatar ? $user->avatar : 'login.jpg' }}" width="150px" height="150px" alt=""></a>
                        @unless (Auth::user()->avatar)
                            <a href="#">ایجاد آواتار</a>
                        @endunless
                        <h6 class="mt-3">{{Auth::user()->bio ? '' : 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen'}}</h6>
                    </div>
                    <div class="col-7 rounded overflow-auto" style="height: 400px;">
                        <input type="text" id="myFilter" class="form-control mb-3 mt-2" onkeyup="myFunction()" placeholder="جستجو">
                        <div id="myProducts">
                            @foreach ($array[0] as $user)
                                    <div class="group row mb-3">
                                        <div class="col-2">
                                            <a href="/{{$user->avatar ? $user->avatar : 'login.jpg' }}"><img src="{{$user->avatar ? $user->avatar : 'login.jpg' }}" class="rounded-circle" width="50px" height="50px" alt="{{$user->name}}"></a>
                                        </div>

                                        <div class="title col">
                                            <a href="#" class="text-white"><h5>{{$user->name}}</h5>{{$user->fullName ? '' : 'hamid'}}</a>
                                        </div>

                                        
                                        <div class="col-3">
                                            <h6 class="mt-2">حذف / فالوو</p>
                                        </div>
                                    </div>
                                @endforeach
                        </div>

                    </div>
                    <div class="col">
                        موارد و تنظیمات
                        <br>
                        <a class="btn btn-block btn-outline-warning" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                
                <div class="row mt-5 mb-5">
                    @foreach ($array[2] as $post)
                        <div class="col-4">
                            @include('views.posts')
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>

@endsection
