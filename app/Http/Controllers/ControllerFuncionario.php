<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

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
    
    /**
     * Realiza o INSERT no Banco de Dados.
     * 
     * @return Object
     */
    public function insereFuncionario() {
        $aCampos = Request::all();
        DB::insert("INSERT INTO funcionarios(IDFuncionario, Nome, Sobrenome, Titulo, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial) VALUES({$aCampos['IDFuncionario']}, '{$aCampos['Nome']}', '{$aCampos['Sobrenome']}', '{$aCampos['Titulo']}', '{$aCampos['DataNac']}', '{$aCampos['DataAdmissao']}','{$aCampos['Endereco']}', '{$aCampos['Cidade']}','{$aCampos['Regiao']}', '{$aCampos['Cep']}', '{$aCampos['Pais']}', '{$aCampos['TelefoneResidencial']}')");
        
        return view('ViewProdutoAdicionado')->with('Nome', $aCampos['Nome']);
    }
    
    public function deleteFuncionario($IDFuncionario) {
        DB::table('funcionarios_territorios')->where('IDFuncionario', '=', $IDFuncionario)->delete();
        DB::table('funcionarios')->where('IDFuncionario', '=', $IDFuncionario)->delete();
        return redirect()->action('ControllerFuncionario@getSqlPadraoConsultaFuncionario');
    }
    
}