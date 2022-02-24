@extends('layouts.default')
@section('content')
    @include('views.navbar')
    @include('jquery_search')

    <div class="container">
        <div class="row justify-content-center text-white">
            <div class="col-lg-10">
                <h2 class="mb-3 text-right">
                    پست های فالوور ها
                </h2>
                <div class="d-flex flex-row mb-5 overflow-auto" style="width: 99%;">
                    @foreach ($p as $post)
                        <div class="p-2 bd-highlight">
                            @include('views.story')
                        </div>
                    @endforeach
                </div>
                
                <div class="col-12">
                    <input type="text" id="myFilter" class="form-control mb-3 mt-2" onkeyup="myFunction()" placeholder="جستجو">
                    <div class="row text-center mb-5" id="myProducts">
                        @foreach ($p as $post)
                            <div class="group col-lg-4 col-12">
                                @include('views.posts')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
