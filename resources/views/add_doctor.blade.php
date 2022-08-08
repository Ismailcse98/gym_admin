@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Doctors</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
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
                                    <label class="col-lg-3 col-form-label">E-mail</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="email">
                                        @error('email')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control" name="password">
                                        @error('password')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Gender</label>
                                    <div class="col-lg-9">
                                        <select class="form-select" name="gender">
                                            <option>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('gender')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" class="form-control" placeholder="Enter message" name="address"></textarea>
                                        @error('address')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">NID Number</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="nid_number">
                                        @error('nid_number')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="phone">
                                        @error('phone')
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
                                    <label class="col-lg-3 col-form-label">Upload Image</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-select" name="country">
                                                        <option>Select Country</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="France">France</option>
                                                        <option value="India">India</option>
                                                        <option value="Spain">Spain</option>
                                                    </select>
                                        @error('country')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <select class="form-select" name="specialities_id">
                                                        <option>Select Specialities</option>
                                                    </select>
                                        @error('specialities_id')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                                </div>
                                            </div>
                                        </div>
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