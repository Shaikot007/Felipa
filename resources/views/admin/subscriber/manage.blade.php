@extends('admin.master')

@section('title')
    Manage subscriber
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All subscriber info goes here</div>
                </div>
                <div class="ibox-body">
                    @if($message = Session::get('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{$message}}!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover text-center" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Subscriber email</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subscribers as $subscriber)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$subscriber->email}}</td>
                                    <td>
                                        <a href="{{url('subscribers/'.$subscriber->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('subscriberDeleteForm{{$subscriber->id}}').submit();" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{url('/subscribers/'.$subscriber->id.'')}}" method="post" id="subscriberDeleteForm{{$subscriber->id}}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
