@extends('layouts.basic-layout')
<body>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>Welcome</h1>
                    <div class="card-body">
                        <p>Welcome to our application! Please log in or register to continue.</p>
                        
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                            <a href="{{ route('delete') }}" class="btn btn-success">Delete</a>
                            <a href="{{ route('update') }}" class="btn btn-success">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>