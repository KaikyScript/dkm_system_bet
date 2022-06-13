@extends('assets.layout')
@section('title', 'Dashboard')
@section('content')

<ul id="slide-out" class="sidenav sidenav-fixed" id="sidenavDash">
    <li>
      <div class="user-view">
      <div class="background ">
      <img src="{{ asset('images/dkmlogo2.svg') }}">

      </div>

      <a href="#name"><span class="white-text name"><h5>Olá {{ $user->name }}</h5></span></a>
      <a href="#email"><span class="white-text email">{{ $user->email }}</span></a>
    </div>
</li>

    <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="material-icons">apps</i>Menu</div>
          <div class="collapsible-body">
              <ul>
                  <li><a class="list-group-item list-group-item-action list-group-item-light" href="{{ route('gerenciamento') }}">Gerenciamento<i class="fa-solid fa-bars-progress fs-5 mx-auto"></i></a></li>
                  <li><a class="list-group-item list-group-item-action list-group-item-light mx-left mb-2" href="">BLAZE<i class="fa fa-rocket fs-5 mx-auto"></i></a></li>
                  <li><a class="list-group-item list-group-item-action list-group-item-light" href="">SMASHUP</a></li>
              </ul>
          </div>
        </li>
    </ul>

    <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="fa-solid fa-headset"></i>Suporte</div>
          <div class="collapsible-body"></div>
        </li>
    </ul>

    <i class="fa-solid fa-rocket-launch"></i>





    <div class="col s12">
        <form action="{{ route('logout') }}" method="POST">
            @csrf

        <button class="btn waves-effect waves-light justify-content-center" type="submit" value="logout">Sair
            <i class="material-icons right">exit_to_app</i>
        </button>

        </form>
    </div>

    <button><a class="button link-dark" role="button" href="{{ route('home') }}">Voltar ao Início</a></button>
  </ul>



    <main>
        <div class="container-lg">
            <div class="row">
                <div class="col ">
                    <h1 id="h1Dash">Dashboard (você está conectado)</h1>
                </div>
            </div>
        </div>
    </main>


@endsection
