@extends('layouts.default')
@section('content')
    @include('views.navbar')
    @include('jquery_search')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2 class="text-right mb-4 text-white">بخش سایتهای متعبر</h2>
                <div class="col-10 mx-auto mb-4">
                    <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="جستجو">
                </div>
                <div class="row text-center mb-5" id="myProducts">
                    @foreach ($p as $post)
                        <div class="group col-lg-6 col-12">
                            @include('views.posts')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection