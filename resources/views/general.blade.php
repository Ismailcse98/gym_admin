@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update General Information</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('general_update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">E-mail</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control" name="email" value="{{$data->email}}">
                                        @error('email')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                        @error('Phone')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Location</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="location" value="{{$data->location}}">
                                        @error('location')
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
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Facebook Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                        @error('facebook')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Twitter Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                        @error('twitter')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Instagram Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                        @error('instagram')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Copyright Text</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="copyright" value="{{$data->copyright}}">
                                        @error('copyright')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Logo</label>
                                    <div class="col-lg-9">
                                        @if($data->logo)
                                        <img src="assets/uploads/{{$data->logo}}" alt="" style="width: 100px; background: #000;">
                                        @endif
                                        <input type="file" class="form-control" name="logo">
                                        @error('logo')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection