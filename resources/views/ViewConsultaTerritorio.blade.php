@extends('ViewInicial')

@section('content')

<table class="table table-striped">
    <tr>
        <th>Código do Territorio</th>
        <th>Descrição do Territorio</th>
        <th>Código da Região</th>
        <th>Descrição da Região</th>
        <th>Ações</th>
    </tr>
    <?php foreach($territorios as $oTerritorio): ?>
        <tr>
            <td><?= $oTerritorio->IDTerritorio ?></td>
            <td><?= $oTerritorio->DescricaoTerritorio ?></td>
            <td><?= $oTerritorio->IDRegiao ?></td>
            <td><?= $oTerritorio->DescricaoRegiao ?></td>
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