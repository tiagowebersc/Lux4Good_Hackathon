@extends('layouts.super_admin_template')

@section('title', '4 Motion - Towns')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('/css/town_manager.css')}}" />
@endsection

@section('content')

<main class='mainList'>

    <div class="listHeader">
        <h1>TOWN</h1>

        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search">
        </div>

        <input class='addButton' value='ADD TOWN +' type="submit">
    </div>

    <div class="listContent">

        @for ($i = 0; $i < 8; $i++)

        <div class="listContentItem">

            <p class='itemTitle'>Petange</p>
            <img src="{{URL::asset('images/beautiful.jpeg')}}" alt="image of 'insert name'">

        </div>

        @endfor

    </div>

    <div class="listPagination"></div>


</main>

@endsection
