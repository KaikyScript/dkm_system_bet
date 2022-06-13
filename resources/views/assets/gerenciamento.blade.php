@extends('assets.layout')
@section('title', 'Dashboard')
@section('content')


<nav class="navbar bg-light mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-bars-progress fs-5 p-3"></i>
        Área de Gerenciamento
      </a>
      <button type="button" class="btn btn-outline-danger end p-2 offset-md-4"><a class="link-dark" href="{{ route('dashboard') }}">Voltar para o Dashboard</a></button>
    </div>
  </nav>

<div class="container" id="containers">
    <div class="row">
        <div class="col">
            <h5 class="h5G">Bem-vindo(a) <strong class="strongG">{{ $user->name }}</strong>, comece agora mesmo á controlar as suas apostas com o nosso sistema.</h5>
        </div>
    </div>
</div>

<div class="container" id="containers2">
    <div class="row mx-auto justify-content-center">
        <div class="col-6">

            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <span id="real" class="input-group-text">0.00</span>
                <input type="number" value="" class="bancaInicial form-control" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                    value="" placeholder="DIGITE SUA BANCA INICIAL">
                <button class="enviar btn btn-primary" type="button" id="button-addon2">ENVIAR</button>
            </div>
            <br>
            <!-- <div>
                <form>
                    <input class="form-check-input mt-10" type="radio" name="radio" value="0" required> DOUBLE
                    <input class="form-check-input mt-10" type="radio" name="radio" value="1" required> CRASH
                </form>
            </div> -->
            <br>
            <div>
                <select name="gerenciamento" class="form-control" id="gerenciamento">
                    <option value="" selected disabled>SELECIONE O GERENCIAMENTO</option>
                    <option value="2">DOUBLE</option>
                    <option value="0.08">DOUBLE BRANCO</option>
                    <option value="0.30">CRASH 5x</option>
                    <option value="0.12">CRASH 10x</option>
                    <option value="0.05">CRASH 20x</option>
                    <option value="0.02">CRASH 50x</option>
                    <option value="0.01">CRASH 100x</option>
                </select>
            </div>
            <br>
            <div>
                <!-- <input type="number" class="entradaInicial form-control" placeholder="DIGITE SUA ENTRADA INICIAL" value=""> -->
                 <div class="input-group mb-3">
                <input type="number" value="" class="entradaInicial form-control"
                    value="" placeholder="DIGITE SUA ENTRADA INICIAL">
                <button class="entrada btn btn-primary" type="button" id="button-addon2">ENVIAR</button>
            </div>

            </div>
            <br>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text">R$</span>
                    <input type="number" value="" class="proximaEntrada form-control"
                        pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" placeholder="PROXIMA ENTRADA" disabled>
                    <button class="btn btn-info" type="button" id="copyProximaEntrada"><img src="files.svg"
                            alt="copy"></button>
                </div>
            </div>
            <br>
            <div>
                <button type="button" id="win" class="btn btn-outline-success">WIN</button>
                <button type="button" id="loss" class="btn btn-outline-warning">GALE</button>
                <button type="button" id="loss" class="btn btn-outline-danger">LOSS</button>
                <button type="reset" id="reset" class="btn btn-outline-dark  ">Limpar</button>
            </div><br>
            <div class="resultado">

                </div>
            </div>

        </div>
    </div>
</div>

<div class="img-fluid">
    <img src="/images/dkmlogo.svg" alt="">
</div>




<script>
    const bancaInicial = document.querySelector(".bancaInicial")
const btnBanca = document.querySelector('.enviar')
const btnEntrada =document.querySelector('.entrada')
const spanReal = document.querySelector('#real')
const entradaInicial = document.querySelector('.entradaInicial')
const proximaEntrada = document.querySelector('.proximaEntrada')
const copyProximaEntrada = document.querySelector('#copyProximaEntrada')
const btnWin = document.getElementById('win')
const btnLoss = document.getElementById('loss')
const gerenciamento = document.querySelector('#gerenciamento')
const resultado = document.querySelector('.resultado')
const vInicial = Number(entradaInicial.value)

bancaInicial.val("");


btnBanca.addEventListener('click', () => {
    let vBancaInicial = Number(bancaInicial.value).toFixed(2)
    spanReal.innerHTML = `${vBancaInicial}`

})
btnEntrada.addEventListener("click", () => {
    let vEntradaInicial = Number(entradaInicial.value)
    proximaEntrada.value = vEntradaInicial

})

let inicial = 10
let contador = 1
let contagem = 0
btnLoss.addEventListener('click', () => {
    if(entradaInicial === ''){

    }
    const taxa = Number(gerenciamento.value)
    var conta = taxa * inicial
    inicial += conta
    console.log(inicial)
    contagem += inicial
    proximaEntrada.value = inicial.toFixed(2)
    resultado.innerHTML = `R$${(contagem).toFixed(2)} total de loss: ${contador}`
    contador++

})
</script>

@endsection
