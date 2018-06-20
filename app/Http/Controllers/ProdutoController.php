<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller {

    /**
     * Busca os todos os produtos da base de dados.
     * 
     * @return type
     */
    public function lista(){
        $bProduto = DB::select('SELECT * FROM produtos');

        return view('produtosListagem')->with('produtos', $bProduto);
    }
    
    /**
     * Busca o produto e chama a view para listar.
     * 
     * @param type $id
     * @return string
     */
    public function mostra($id) {
        $bProduto = DB::select("SELECT * FROM produtos WHERE id = {$id}");
        
        if(!$bProduto) {
            return "<h1>Produto inexistente!</h1>";
        }
        
        return view('produtoMostra')->with('produto', $bProduto[0]);
    }
    
    public function novo() {
        return view('adicionaProduto');
    }
    
}