@extends('template')

@section('titulo', 'Extrato')

@section('nav-complementar')
<li class="nav-item">
    <a class="nav-link" href="{{ route('seus_gastos') }}">Entenda os seus gastos</a>
</li>
@endsection

@section('conteudo')
<header class="text-center">
    EXTRATO - Saldo: R$ 9.999,00
</header>

<?php dd($despesas); dd($receitas); ?>

<div class="container d-flex">
    <div class="col-md-6 p-3">
        <h2>Receitas</h2>

        <div class="card mb-4">
            <div class="card-body">
                <p class="card-title">Title</p>
                <p class="card-text">R$ 999.999,99</p>
            </div>
            <div class="card-footer">
                <span>18/11/2022</span>
                <a href="#" class="mx-3"><i class="fa-regular fa-trash-can"></i></a>
                <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-6 p-3">
        <h2>Despesas</h2>

        <div class="card mb-4">
            <div class="card-body">
                <p class="card-title">Title</p>
                <p class="card-text">R$ 999.999,99</p>
            </div>
            <div class="card-footer">
                <span>18/11/2022</span>
                <a href="#" class="mx-3"><i class="fa-regular fa-trash-can"></i></a>
                <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
        </div>
    </div>
</div>

@endsection