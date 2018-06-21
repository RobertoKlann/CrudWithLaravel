<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

/**
 * Controllador do Funcionário
 * 
 * @package Controller
 * @author  Roberto Klann
 * @since   21/06/2018
 */
class ControllerFuncionario extends Controller {
    
    /**
     * SQL padrão da Consulta de Funcionários.
     * 
     * @return Object
     */
    public function getSqlPadraoConsultaFuncionario() {
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('ViewConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }
    
    /**
     * Busca o SQL da consulta do Relacionamento Funcionário x Território.
     * 
     * @return Object
     */
    public function getSqlConultaFuncionarioTerritorio() {
        $bFuncionariosTerritorios = DB::select('SELECT * FROM funcionarios_territorios JOIN territorios USING(IDTerritorio) JOIN funcionarios USING(IDFuncionario)');
        return view('ViewConsultaFuncionarioTerritorio')->with('funcionarios_territorios', $bFuncionariosTerritorios);
    }
    
}