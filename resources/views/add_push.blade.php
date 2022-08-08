@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Pushes</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('update_push',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title Top</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="title_top" value="{{$data->title_top}}">
                                        @error('title_top')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title Bottom</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="title_bottom" value="{{$data->title_bottom}}">
                                        @error('title_bottom')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" class="form-control" placeholder="Enter message" name="description">{{$data->description}}</textarea>
                                        @error('description')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Uploads Image</label>
                                    <div class="col-lg-9">
                                        <img src="assets/uploads/{{$data->image}}" alt="" style="width: 150px;">
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection