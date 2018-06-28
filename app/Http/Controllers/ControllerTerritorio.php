<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

/**
 * Controllador do Território
 * 
 * @package Controller
 * @author  Roberto Klann
 * @since   21/06/2018
 */
class ControllerTerritorio extends Controller {
    
    /**
     * Busca o SQL da Consulta Padrão do Território.
     * 
     * @return Object
     */
    public function getSqlPadraoConsultaTerritorio() {
        $bTerritorio = DB::select('SELECT * FROM territorios JOIN regiao USING(IDRegiao)');
        return view('ViewConsultaTerritorio')->with('territorios', $bTerritorio);
    }
    
    public function insereTerritorio() {
        $aCampos = Request::all();
        DB::insert("INSERT INTO territorios(IDTerritorio, DescricaoTerritorio, IDRegiao) "
                      . "VALUES(" . $aCampos['IDTerritorio'] . ", '" . $aCampos['DescricaoTerritorio'] . "', " . $aCampos['IDRegiao'] . ")");
        
        return view('ViewTerritorioAdicionado')->with('DescricaoTerritorio', $aCampos['DescricaoTerritorio']);
    }
    
    /**
     * Busca a Região a ser alterada.
     *  
     * @param type $IDRegiao
     * @return type
     */
    public function getConsultaTerritorioFromUpdate($IDTerritorio) {
        $bTerritorio = DB::select('SELECT * FROM territorios WHERE IDTerritorio = ' . $IDTerritorio);
        
        return view('ViewAlteraTerritorio')->with('territorios', $bTerritorio);
    }
    
    /**
     * Realiza o UPDATE para a Região.
     * 
     * @return type
     */
    public function updateTerritorio() {
        $IDTerritorio    = Request::input('IDTerritorio');
        $IDRegiao        = Request::input('IDRegiao');
        $DescricaoTerritorio = Request::input('DescricaoTerritorio');
        DB::table('territorios')->where('IDTerritorio', '=', $IDTerritorio)->update(['IDTerritorio' => $IDTerritorio, 'DescricaoTerritorio' => $DescricaoTerritorio, 'IDRegiao' => $IDRegiao]);
        
        return view('ViewTerritorioAlterado')->with('DescricaoTerritorio', $DescricaoTerritorio);
    }
    
}