@extends('admin.master')

@section('title')
    Manage blog
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All blog info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover text-justify" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">User name</th>
                                <th class="text-center">Blog title</th>
                                <th class="text-center">Blog description</th>
                                <th class="text-center">Blog image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->name}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->thumbnail)}}" alt="Image" height="70" width="100"/>
                                    </td>
                                    <td>
                                        <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-success btn-xs" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('blogDeleteForm{{$blog->id}}').submit();" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{route('blog.delete', ['id' => $blog->id])}}" method="post" id="blogDeleteForm{{$blog->id}}">
                                            @csrf
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
