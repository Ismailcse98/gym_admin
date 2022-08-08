@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store_blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Category</label>
                                    <div class="col-lg-9">
                                        <select class="form-select" name="category_id">
                                            <option>Select Category</option>
                                            @foreach($list as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="title">
                                        @error('title')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" class="form-control" placeholder="Enter message" name="description"></textarea>
                                        @error('description')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tags</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="tags">
                                        @error('tags')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Posted By</label>
                                    <div class="col-lg-9">
                                        <input type="text" value="{{Auth::user()->name}}" class="form-control" disabled>
                                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                        @error('user_id')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Image</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection