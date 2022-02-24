<a href="/{{$post->attachment ? '' : 'login.jpg'}}"><img src="{{$post->attachment ? '' : 'login.jpg'}}" class="rounded mt-3" width="200px" height="200px" alt="{{$post->subject}}"></a>
<div class="mt-2 mr-4 h5 text-lg-right">
    <a href="#" class="text-white pl-3 pr-3" data-toggle="collapse" data-target="#demo{{$post->id}}">نمایش توضیحات</a>
</div>
<div id="demo{{$post->id}}" class="collapse @if (Route::is('follower')) title @endif">
    {{$post->description}}
</div>