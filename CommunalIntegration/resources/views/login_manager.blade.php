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
                <form action="summary_manager.php" method="GET">
                    <label for="email">EMAIL</label><br>
                    <input class="email" type="email" name="email" id="email" placeholder="please enter your email" required><br>
                    <label for="email">PASSWORD</label><br>
                    <input class="password" type="password" name="password" id="password" label="PASSWORD" placeholder="please enter your password" required><br>
                    <div class="buttonBox">
                        <h4>forget your password?</h4>
                        <input class="button" type="button" href="{{ url('summary_manager.php') }}" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

@endsection
@section('loginForm')

@endsection