<div class="modalShow row">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{__('words.'.$title)}} {{__('words.update')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"wire:click="close()" aria-label="Close"></button>
            </div>
            <form action="{{route('category.update' ,$id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">{{__('words.name')}}</label>
                        <input type="text" name="name" id="title" wire:model="name" class="form-control" placeholder="{{__('words.name')}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="close()" data-bs-dismiss="modal">{{__('words.close')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('words.save')}}</button>
                </div>
            </form>
    </div>
</div>
