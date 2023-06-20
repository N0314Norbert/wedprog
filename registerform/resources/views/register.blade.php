@extends('layouts.basic-layout')
<body>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <div>
        <div>
            <div >
            <h1>Register</h1>
                <div class="card">                  
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div >
                                <label for="username">Name</label>

                                <div >
                                    <input id="username" type="text" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div >
                                <label for="email" >E-Mail Address</label>

                                <div >
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div >
                                <label for="password" >Password</label>

                                <div >
                                    <input id="password" type="password"  name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="password-confirm" >Confirm Password</label>

                                <div >
                                    <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div >
                                <div >
                                    <button type="submit" >
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>