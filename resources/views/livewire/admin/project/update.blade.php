    <div class="modalShow row">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Projects Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('projects.update' , $id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="title">{{__('words.name')}}</label>
                            <input type="text" name="name" wire:model='name' id="title" class="form-control" placeholder="{{__('words.name')}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="cat">Categories</label>
                            <select name="category_id" class="form-control" id="cat">
                                <option value="">Proekt Categoriyasini tanla</option>
                                @foreach($category as $item)
                                    <option value="{{$item->id}}" {{$category_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label for="img">Image</label><br>
                        <img src="/storage/project_img/{{$image}}" width="150px" alt="">
                        <input type="file" id="img" name="image" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label for="link">Link</label>
                        <input type="text" id="link" wire:model="link" name="link" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('words.close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('words.save')}}</button>
            </div>
            </form>
        </div>
    </div>
