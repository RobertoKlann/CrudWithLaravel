@extends('ViewInicial')

@section('content')

          <h1>Listagem deasdsa Produtos</h1><br>
    
        <table class="table table-striped">
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php foreach($produtos as $p): ?>

                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td>
                        <a href="/produto/mostra/<?= $p->id ?>">
                            <i class="fas fa-search"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/produto/novo/">
                            <i class="fas fa-plus"></i>
                        </a>
                    </td>
                </tr>

            <?php endforeach ?>
                
            
        </table>
      <?php @stop ?>

@endsection