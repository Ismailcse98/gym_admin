@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Trainers</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store_trainers')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="name">
                                        @error('name')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Designation</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="designation">
                                        @error('designation')
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
                                    <label class="col-lg-3 col-form-label">Facebook Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="facebook">
                                        @error('facebook')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Twitter Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="twitter">
                                        @error('twitter')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Instagram Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="instagram">
                                        @error('instagram')
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