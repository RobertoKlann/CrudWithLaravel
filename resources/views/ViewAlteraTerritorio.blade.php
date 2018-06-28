@extends('ViewInicial')

@section('content')
<br>
<center>
    <h2>Alteração de Território</h2>
</center>
<div class = "divFormCadFuncionarios">
    <?php foreach($territorios as $oTerritorio): ?>
    <form class = "container" action="/ViewInicial/updateTerritorio">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_territorio">Identificador do Território</label>
                    <input style="width: 100px;" type="number" class="form-control" value="<?= $oTerritorio->IDTerritorio ?>" name="IDTerritorio" placeholder="Cód Ter">
                </div>
                <div class="form-group">
                    <label for="des_territorio">Descrição do Território</label>
                    <input style="width: 400px;" type="text" class="form-control" value="<?= $oTerritorio->DescricaoTerritorio ?>" name="DescricaoTerritorio" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <label for="id_regiao">Código da Região</label>
                    <input style="width: 100px;" type="text" class="form-control" value="<?= $oTerritorio->IDRegiao ?>" name="IDRegiao" placeholder="Cód Reg">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>
    </form>
    <?php endforeach ?>
</div>

<?php @stop ?>
@endsection