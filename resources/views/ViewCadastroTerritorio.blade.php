@extends('ViewInicial')

@section('content')
<br>
<center>
    <h2>Cadastro de Território</h2>
</center>
<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/Roberto/WEB-II---Projeto-Dois/Controller/ControllerTerritorioAdd.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_territorio">Identificador do Território</label>
                    <input style="width: 100px;" type="number" class="form-control" name="IDFuncionario" placeholder="Cód Ter">
                </div>
                <div class="form-group">
                    <label for="des_territorio">Descrição do Território</label>
                    <input style="width: 400px;" type="text" class="form-control" name="DescricaoTerritorio" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <label for="id_regiao">Código da Região</label>
                    <input style="width: 100px;" type="text" class="form-control" name="IDRegiao" placeholder="Cód Reg">
                </div>
                <div class="form-group">
                    <label for="des_regiao">Descrição do Região</label>
                    <input style="width: 300px;"type="text" class="form-control" name="Descricao" placeholder="Selecione...">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaTerritorio.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>
    </form>
</div>

<?php @stop ?>
@endsection