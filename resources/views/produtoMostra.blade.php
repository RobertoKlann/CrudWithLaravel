@extends('ViewInicial')

@section('content')
<div class="container">
    <h1>Produto</h1>
    <div class="jumbotron">
        <h2 style="text-align: center">Detalhes do Produto <?=$produto->nome ?></h2>
        <ul>
            <li style=" list-style-type:none">Valor: <?= $produto->valor ?></li>
            <li style=" list-style-type:none">Descrição: <?= $produto->descricao ?></li>
            <li style=" list-style-type:none">Quantidade: <?= $produto->quantidade ?></li>
        </ul>
    </div>
</div>

@endsection