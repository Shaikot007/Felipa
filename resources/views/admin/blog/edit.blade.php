@extends('admin.master')

@section('title')
    Edit blog
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit blog form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{url('blogs/'.$blog->id.'')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blog title</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$blog->title}}" type="text" name="title" placeholder="Enter blog title" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blog image</label>
                            <div class="col-sm-10">
                                <img src="{{asset($blog->thumbnail)}}" alt="" height="100" width="150"/>
                                <input class="form-control-file" type="file" name="thumbnail" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blog description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Enter blog description" required>{{$blog->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update blog info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
