@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Toper Action</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store_action_top')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
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
                                    <label class="col-lg-3 col-form-label">Icon</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" name="icon" >
                                        @error('icon')
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