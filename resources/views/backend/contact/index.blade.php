@extends('backend.inc.app')
@section('content')
<div>
    <style>
        a {
            color: #000;
        }
    </style>
    <div class="card card-outline card-primary">
        <div class="card-header d-flex justify-content-between">
            <a class="h4">{{__('words.contact')}}</a>
        
            <div class="left">
                <a href="{{route('admin')}}">{{__('words.home')}}</a> /
                <a href="">{{__('words.contact')}}</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('words.ism')}}</th>
                        <th>{{__('words.phone')}}</th>
                        <th>{{__('words.message')}}</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @if($models)
                    @foreach($models as $model)
                        <tr>
                            <td>{{$model->id}}</td>
                            <td>{{$model->name}}</td>
                            <td>{{$model->phone}}</td>
                            <td>{{$model->message}}</td>
                            <td class="d-flex gap-1">
                                <a href="{{route('contact.delete',$model->id)}}" class="btn btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
            <div class="card-footer">
                @if ($models!=null)
                {{$models->links()}}
                @endif
            </div>
        </div>
    </div>
</div>

@endsection