@extends('layouts.basic-layout')
<body>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div>
        <div>
            <div>
                <div class="card">
                <h1>Login</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <label for="email">E-Mail Address</label>

                                <div>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div >
                                <label for="password">Password</label>

                                <div>
                                    <input id="password" type="password" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit">
                                        Login
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