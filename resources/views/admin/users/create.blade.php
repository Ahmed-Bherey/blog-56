@extends('layouts.admin')
@section('title') Create Users @endsection
@section('content')
<div class="container" style="margin-top: 50px">
    <h1 class="text-center">Create an User</h1>
    <form method="POST" action="{{route('user.store')}}">
        <div class="row">
        @if (Session::has('Success'))
        <div class="card col-lg-12 mb-4 py-3 border-left-success">
            <div class="card-body">
            {{Session::get('Success')}}
            </div>
        </div>
        @endif
        </div>
        {{-- <input type="_token" value="{{csrf_token()}}"> --}}
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Username" name="name">
            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email Address" name="email">
            @error('email')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            @error('password')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary col-12">Register Account</button>
    </form>
</div>
@endsection
