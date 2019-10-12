@extends('layouts.super_admin_template')

@section('title', '4 Motion - Login')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/login_manager.css') }}" />
    @endsection

@section('content')

<main>
    <div class='main-screen'>
        <div class='formbox'>
            <h2>LOGIN</h2>
            <div class= 'form'>
                <form action="/summary_manager.blade.php">
                    <label for="email">EMAIL</label>
                    <input class="email" type="email" name="email" id="email" placeholder="please enter your email"><br>
                    <label for="email">PASSWORD</label>
                    <input class="password" type="password" name="password" id="password" label="PASSWORD" placeholder="please enter your password"><br>
                    <div class="buttonBox">
                        <input class="button" type="button" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

@endsection
@section('loginForm')

@endsection