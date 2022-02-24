@extends('layouts.default')
@section('content')
    @include('views.navbar')
    @include('jquery_search')
    
    <div class="row col-lg-10 mx-auto">

        <div class="col-md-12 mb-5 text-white">
                <h2 class="mb-3 text-right">
                    <i class="bx bxs-comment"></i>ارتباطات
                </h2>
            <div class="p-3">
                @foreach($messages as $message)

                    <div class="col-lg-8 col-10 mx-auto">
                        <div class="{{$message->isAdmin ? 'bg-succsess' : 'bg-dark'}} rounded text-center mb-2 pt-2 row">
                            <div class="col-2">
                                <a href="{{$message->attachment ? $message->attachment :'login.jpg'}}">
                                    <img class="float-left rounded-circle" src="{{$message->attachment ? $message->attachment :'login.jpg'}}" width="50px" height="50px">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="text-white">
                                    {{ Str::limit($message->description, 100) }}
                                    {{-- {{$message->sender_id}} شماره کاربر تیکت --}}
                                </a>
                            </div>
                            <div class="col-2">
                                <h6 class="text-right">
                                    حذف پیام ها
                                </h6>
                            </div>
                            <div class="col-12 row">
                                @foreach($users as $user)
                                    @if ($user->id == $message->sender_id)
                                        <div class="col text-left">{{$user->name}}</div>
                                        <div class="col text-right">{{$message->created_at}}</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>





    @foreach ($g as $group)
        {{$group->id}}
    @endforeach

@endsection