@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Banar Data List</h4>
                </div>
                <div class="card-body">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-borderless hover-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>SL</th>
                                        <th>Class Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list as $data)
                                    <tr>
                                        <td>01</td>
                                        <td>{{$data->class_name}}</td>
                                        <td><img src="assets/uploads/{{$data->image}}" alt="" style="width: 100px;"></td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection