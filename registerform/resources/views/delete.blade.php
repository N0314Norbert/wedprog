@extends('layouts.basic-layout')
<body>
<h1>Delete User</h1>

    <form method="POST" action="{{ route('delete') }}">
        @csrf
        @method('DELETE')

        <div >
            <label for="userId">User ID:</label>
            <input type="text" name="userId" id="userId" >
        </div>

        <button type="submit" >Delete User</button>
    </form>
    </body>