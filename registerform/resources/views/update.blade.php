@extends('layouts.basic-layout')
<body>
<h1>Update User</h1>

<form method="POST" action="{{ route('update') }}">
    @csrf
    @method('PUT')

    <div>
        <label for="userId">User ID:</label>
        <input type="text" name="userId" id="userId">
    </div>

    <div >
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" >
    </div>

    <button type="submit">Update User</button>
</form>
</body>