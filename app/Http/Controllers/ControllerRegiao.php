<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

/**
 * Controllador da Região
 * 
 * @package Controller
 * @author  Roberto Klann
 * @since   21/06/2018
 */
class ControllerRegiao extends Controller {
    
    /**
     * Busca o SQL padrão da Consulta da Região.
     * 
     * @return Object
     */
    public function getSqlPadraoConsultaRegiao() {
        $bRegiao = DB::select('SELECT * FROM regiao ');
        return view('ViewConsultaRegiao')->with('regiao', $bRegiao);
    }
    
}