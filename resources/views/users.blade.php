@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td><a href="" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                    <a href=" " class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete this product?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection