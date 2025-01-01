<div>
    <style>
        a {
            color: #000;
        }
    </style>
    <div class="card card-outline card-primary">
        @include('livewire.card-header')
        @include('livewire.admin.project.modal')
        @if($delete==1)
            @include('livewire.delete')
        @endif
        @if($update==1)
            @include('livewire.admin.project.update')
            @include('livewire.show')
        @endif
        <div class="card-body">
            <table class="table table-bordered table-responsive-lg">
                @include('livewire.table-head')
                @if($models)
                    @foreach($models as $model)
                        <tr>
                            <td>{{++$count}}</td>
                            <td>{{$model->name}}</td>
                            <td><img src="/storage/project_img/{{$model->image}}" style="width: 100px;" alt=""></td>
                            <td style="text-transform:none;">{{$model->link}}</td>
                            <td>{{$model->category->name}}</td>
                            <td class="d-flex gap-1">
                                <button  wire:click="updateWindow({{$model->id}})" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></button>
                                <div wire:ignore>
                                    <button class="btn btn-danger btn-sm" onclick="confirm('O\'chirishni istaysizmi ?')" wire:click="deleteWindow({{$model->id}})" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="bx bx-trash"></i></button>
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
