<div>
    <style>
        a {
            color: #000;
        }
    </style>
    <div class="card card-outline card-primary">
        @include('livewire.card-header')
        @include('livewire.admin.about.modal')
        @if($delete==1)
            @include('livewire.delete')

        @endif
        <div class="card-body">
            <table class="table table-bordered table-responsive-lg">
                @include('livewire.table-head')
                @if($models)
                    @foreach($models as $model)
                        <tr>
                            <td>{{++$count}}</td>
                            <td>{{$model->name[session('locale')]}}</td>
                            <td>{{$model->title}}</td>
                            <td class="d-flex gap-1">
                                <button class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></button>
                                <div wire:ignore>
                                    <button class="btn btn-danger btn-sm" wire:click="deleteWindow({{$model->id}})" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="bx bx-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
        @include('livewire.card-footer')
    </div>
</div>
