@extends('layout')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Packages List</h4>
                </div>
                <div class="card-body">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-borderless hover-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Description One</th>
                                        <th>Description Two</th>
                                        <th>Description Three</th>
                                        <th>Description Four</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list as $data)
                                    <tr>
                                        <td>01</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->d_1}}</td>
                                        <td>{{$data->d_2}}</td>
                                        <td>{{$data->d_3}}</td>
                                        <td>{{$data->d_4}}</td>
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