<div class="card-header d-flex justify-content-between">
    <a class="h4">{{__('words.'.$title)}}</a>

    <div class="left">
        <a href="{{route('admin')}}">{{__('words.home')}}</a> /
        <a href="">{{__('words.about')}}</a>
    </div>
</div>
<div class="search px-4 row">
    <form action="" class="col-lg-10">
        <input type="search" class="form-control" placeholder="{{__('words.search')}}" wire:model="search">
    </form>
    <button type="button" class="col-lg-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{__('words.add')}}</button>
</div>
