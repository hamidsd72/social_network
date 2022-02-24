<!-- The Modal -->
<div class="modal fade" id="follower">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="btn btn-outline-danger float-left" data-dismiss="modal"> بستن &times;</button>
                <h5 class="mt-2 mr-5">لیست کاربران علامت زده شده</h5>
            </div>
        
        <!-- Modal body -->
        <div class="modal-body pl-5 text-white">
            {{-- <div class="col-lg-8 col-12 mx-auto row ml-5 mr-5 pl-5 pt-3 pb-3 bg-secondary rounded"> --}}
                @foreach ($array[3] as $fallower)
                    <div class="col-12 row @if ($fallower->id % 2 == 0) bg-secondary @else bg-dark @endif">
                        <div class="col-6">{{$fallower->follower_id}}</div>
                        <div class="col-6">
                            {{$fallower->user_id}}
                        </div><hr>
                    </div>
                @endforeach
            {{-- </div> --}}
        </div>
        
        <!-- Modal footer -->
        {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> --}}
        
        </div>
    </div>
</div>