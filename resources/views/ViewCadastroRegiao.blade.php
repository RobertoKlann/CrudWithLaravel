@extends('ViewInicial')

@section('content')
<br>
<center>
    <h2>Cadastro de Região</h2>
</center>
<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/Roberto/WEB-II---Projeto-Dois/Controller/ControllerRegiaoAdd.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_regiao">Identificador da Região</label>
                    <input style="width: 100px;" type="number" class="form-control" name="IDRegiao" placeholder="Cód Reg">
                </div>
                <div class="form-group">
                    <label for="des_regiao">Descrição da Região</label>
                    <input style="width: 400px;" type="text" class="form-control" name="DescricaoRegiao" placeholder="Descrição">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "/Roberto/WEB-II---Projeto-Dois/View/ViewConsultaRegiao.php">Cancelar</a>
        <button class="btn btn-default">Limpar</button>
    </form>
</div>

<?php @stop ?>
@endsection