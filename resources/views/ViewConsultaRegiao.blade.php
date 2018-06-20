@extends('ViewInicial')

@section('content')

<table class="table table-striped">
    <tr>
        <th>Código da Região</th>
        <th>Descrição da Região</th>
        <th>Ações</th>
    </tr>
    <?php foreach($regiao as $oRegiao): ?>
        <tr>
            <td><?= $oRegiao->IDRegiao ?></td>
            <td><?= $oRegiao->DescricaoRegiao ?></td>
            <td>
                <a href="">
                    <i class="far fa-edit"></i>
                </a>
                <a href="">
                    <i class="far fa-file-excel"></i>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
    
</table>
<?php @stop ?>

@endsection