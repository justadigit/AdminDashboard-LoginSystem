@extends('layouts.master')
@section('title',"User")
@section('name','Users')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Users Adminstration</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>UserType</td>
                    <td colspan="2" align="center">Actions</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->usertype }}</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
