  <nav class="mb-4" id="navbar">
        <div class="nav-wrapper container">
            {{-- <a href="{{ route('home') }}" class="text-start fs-1">DKM Lab Bets</a> --}}
            <span class="text-start fs-1">DKM Lab Bets</span>


@auth
            {{-- Menu Desktop --}}
            <ul class="right hide-on-med-and-down">
            <li><a id="aDash" href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>

            <div class="container">
                <div class="row">
                    <h2 class="text-dark">Você está conectado</h2>
                </div>
            </div>
@endauth

@guest
            <ul class="right hide-on-med-and-down">
                <li class=""><a class="btn btn-outline-light mx-auto" role="button" href="{{ route('login') }}">Entrar</a></li>
                <li><a class="btn btn-outline-light" role="button" href="{{ route('register') }}">Criar uma conta</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

    <h3 class="justify-content-center pb-2 mb-5 p-3 fs-2 fw-bold col-md-10 offset-md-1">Conheça os nossos planos</h3>

    <div class='row mx-auto align-items-center justify-content-center'>


    <div class='col-3'>
        <div class="card mx-auto ml-1 " id="cardDash" style="width: 20rem;">
            <img src="{{ asset('images/VIP1.svg') }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
            <h3 class="vipexclusive" id="vipexclusive">VIP EXCLUSIVE</h3>
            <p class="card-text">Este plano <strong id="vipexclusive">[VIP]</strong> oferece benefícios exclusivo dentro da plataforma.</p>
            <p class="card-text">EM BREVE NOVIDADES.</p>

            {{-- <button class="buttonComprar"><a class="link-primary" href="#">Comprar </a><i class="fa-solid fa-cart-shopping fs-5"></i></button> --}}
            <script class="" src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"data-preference-id="600131270-f6c40b67-b87e-4b75-948b-d6ffb4bfc75c" data-source="button"><i class="fa-solid fa-cart-shopping fs-5"></i></script>
            </div>
        </div>
        </div>

    <div class='col-3'>
        <div class="card mx-middle ml-1" id="cardDash" style="width: 20rem;">
            <img src="{{ asset('images/VIP2.svg') }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
            <h3 class="vipexclusive" id="vipexclusive">VIP DELUXE</h3>
            <p class="card-text">Este plano <strong id="vipexclusive">[VIP]</strong> oferece benefícios exclusivo dentro da plataforma.</p>
            <p class="card-text">EM BREVE NOVIDADES.</p>

            {{-- <button class="buttonComprar"><a class="link-primary" href="#">Comprar </a><i class="fa-solid fa-cart-shopping fs-5"></i></button> --}}
            <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"data-preference-id="600131270-c5a0724a-f162-4e6b-a1a2-c9ee0ddea17f" data-source="button"></script>
            </div>
        </div>
        </div>

    </div>
    </div>
@endguest


