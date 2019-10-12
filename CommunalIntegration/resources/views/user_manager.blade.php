@extends('layouts.super_admin_template')

@section('title', '4 Motion - Summary')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/user_manager.css') }}" />
    @endsection

@section('content')

<main>
    <h1>Esch-sur-Alzette</h1>
    <h3>Registered users</h3>
    <div class='main-screen'>
        <div class='midle-div'>
                <h3>Admin:</h3>
                <ul>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Janet Napolitano</li>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Steven Cam</li>
                </ul>
                <h3>Editor:</h3>
                <ul>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Sara Beckemeyer</li>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Tobias Meyer</li>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Jendrik Müller</li>
                </ul>
                <h3>Basic:</h3>
                <ul>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Craig Burnquist</li>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Sam Chao</li>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Patty Whitman</li>
                    <li class='li-user'><a href="/"><i class="fa fa-trash"></i></a> Mary White</li>
                </ul>
        </div>
        <div class='midle-list'>
            <form action="" method="get">
                <label for="name">FULL NAME</label>
                <input type="text" name="name" id="name" placeholder="Full name">
                <label for="email">E-MAIL</label>
                <input type="email" name="email" id="email" placeholder="E-mail">
                <label for="role">ROLE</label>
                <select name="role">
                    <option value="2">Admin</option>
                    <option value="3">Editor</option>
                    <option value="4">Basic</option>
                    <option value="5">Politician</option>
                </select>
                <button type="submit">Create new user</button>
            </form>
        </div>
    </div>

</main>

@endsection
@section('script')
@endsection