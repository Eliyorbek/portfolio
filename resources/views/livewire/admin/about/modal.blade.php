<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{__('words.'.$title)}} {{__('words.add')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('about.store')}}" method="POST">
            @csrf
            <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="name">{{__('words.name')}} Uz</label>
                            <input type="text" name="name_uz" id="name" class="form-control" placeholder="{{__('words.name')}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="namew">{{__('words.name')}} En</label>
                            <input type="text" name="name_en" id="namew" class="form-control" placeholder="{{__('words.name')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title">{{__('words.title')}}</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="{{__('words.title')}}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('words.close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('words.save')}}</button>
            </div>
            </form>

        </div>
    </div>
</div>
