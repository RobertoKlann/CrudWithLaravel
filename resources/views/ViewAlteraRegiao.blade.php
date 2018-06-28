@extends('ViewInicial')

@section('content')
<br>
<center>
    <h2>Alteração da Região</h2>
</center>
<div class = "divFormCadFuncionarios">
    <?php foreach($regiao as $oRegiao): ?>
    
    <form class = "container" action = "/ViewInicial/updateRegiao">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_regiao">Identificador da Região</label>
                    <input style="width: 100px;" type="disabled" value="<?= $oRegiao->IDRegiao ?>" class="form-control" name="IDRegiao" placeholder="Cód Reg">
                </div>
                <div class="form-group">
                    <label for="des_regiao">Descrição da Região</label>
                    <input style="width: 400px;" type="text" class="form-control" value="<?= $oRegiao->DescricaoRegiao ?>" name="DescricaoRegiao" placeholder="Descrição">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "">Cancelar</a>
        <button class="btn btn-default">Limpar</button>
    </form>
    <?php endforeach ?>
</div>

<?php @stop ?>
@endsection