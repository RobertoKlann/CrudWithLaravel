@extends('ViewInicial')

@section('content')

<table class="table table-striped">
    <tr>
        <th>Código do Funcionário</th>
        <th>Nome</th>
        <th>Código do Território</th>
        <th>Descrição</th>
    </tr>
    <?php foreach($funcionarios_territorios as $oFunc): ?>
        <tr>
            <td><?= $oFunc->IDFuncionario ?></td>
            <td><?= $oFunc->Nome ?></td>
            <td><?= $oFunc->IDTerritorio ?></td>
            <td><?= $oFunc->DescricaoTerritorio ?></td>
        </tr>
    <?php endforeach ?>
    
</table>
<?php @stop ?>

@endsection