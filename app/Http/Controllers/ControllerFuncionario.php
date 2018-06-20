<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerFuncionario extends Controller {
    
    /**
     * SQL padrão da Consulta de Funcionários.
     * 
     * @return View
     */
    public function getSqlPadraoConsultaFuncionario() {
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }
    
}