@extends('layouts.app')

@section('title', 'Pofil')

@section('content')
    <div class="rectangle-div">
        <img src="{{ asset('asset/user2.png') }}" alt="">
        <div class="login-form">
            <h2 class="judul3">Selamat Datang, {{ Auth::user()->username }}!</h2>
                <div id="outputContainer" class="profilcontainer">
                    <label type="username" name="username" id="username" placeholder="Username">{{ Auth::user()->username }}</label>
                </div>
                <div id="outputContainer" class="profilcontainer">
                    <label type="email" name="email" id="email" placeholder="Email">{{ Auth::user()->email }}</label>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="button1" type="submit">Logout</button>
                </form>
        </div>
    </div>

@endsection
