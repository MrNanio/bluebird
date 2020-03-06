<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pl">
<head>
    <title>Ogłoszenia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--style Bootstrap-a-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css"/>
    -->

    <!--własny styl css-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link rel='stylesheet'  href='../../../public/css/style.css' type='text/css' media='all' />
    <!--fonty-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    </head>
<body>
<div class="site-branding">
    <h1 class="site-title">bluebird</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <h3><a class="navbar-brand" href="{{url('/')}}">bluebird</a></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">Regulamin</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('noticeboard')}}">Ogłoszenia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('pages')}}">Dodaj</a>
                </li>
                @if (\Illuminate\Support\Facades\Auth::id()==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin')}}">Admin</a>
                    </li>
                @endif
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <br/><h2>Tablica ogłoszenia:</h2>
    @foreach($pages as $page)
        <table class="table table-hover">
            <tr>
                <td colspan="4"><h3> {{$page->title}}</h3></td>
            </tr>
            <tr>
                <td><h6>numer ogłoszenia: </h6>{{$page->id}}</td> <td></td><td></td><td><h6>miasto:</h6> {{$page->lokalizacja}}</td>
            </tr>
            <tr>
                <td><h6>poziom:</h6> {{$page->poziom}}</td><td></td><td></td><td><h6>przedmiot:</h6> {{$page->przedmiot}}</td>
            </tr>
            <tr>
                <td><h6>osoba kontaktowa:</h6> {{$page->Imie}}</td><td></td><td></td><td><h6>kontakt:</h6> {{$page->tel}}</td>
            </tr>
            <tr>
                <td colspan="4"><h6>TREŚĆ:</h6> {{$page->content}}</td>
            </tr>
        </table>
        <br/><br/>
    @endforeach
    {{$pages->links()}}
    <br/><br/><br/><br/>
</div>
<footer class="footer-up">
    <div class="container">
    </div>
    <div class="footer-down text-center py-3"> paweł nankiewicz 2020
        <a href="{{url('/')}}"> bluebird</a>
    </div>
</footer>

-->



<!--skrypty-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<!--
<script src="js/bootstrap.min.js"></script>
-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>


</html>

