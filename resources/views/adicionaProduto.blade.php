@extends('ViewInicial')


@section('content')
    <div class="container">
        <h1>Cadastrar Produto</h1>
        <div class="jumbotron">
            <form>
                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                  <input type="text" class="form-control" id="Nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="Descrição" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="Valor" placeholder="Valor">
                </div>
                <div class="form-group">
                    <label for="Quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="Quantidade" placeholder="Quantiade">
                </div>
                <button type="submit" class="btn btn-success">Confirmar</button>
                <a href="/produto/">
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                </a>
            </form>
        </div>
    </div>

@endsection