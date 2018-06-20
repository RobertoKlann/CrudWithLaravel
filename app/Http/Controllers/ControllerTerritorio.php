<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerTerritorio extends Controller {
    
    /**
     * Busca o SQL da Consulta Padrão do Território.
     * 
     * @return View
     */
    public function getSqlPadraoConsultaTerritorio() {
        $bTerritorio = DB::select('SELECT * FROM territorios JOIN regiao USING(IDRegiao)');
        return view('ViewConsultaTerritorio')->with('territorios', $bTerritorio);
    }
    
}