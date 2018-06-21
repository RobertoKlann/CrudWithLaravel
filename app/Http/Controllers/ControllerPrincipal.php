<?php

namespace App\Http\Controllers;

/**
 * Controllador Principal
 * 
 * @package Controller
 * @author  Roberto Klann
 * @since   21/06/2018
 */
class ControllerPrincipal extends Controller {
    
    /**
     * Busca a View Inicial da Página
     * 
     * @return Object
     */
    public function getViewInicial() {
        return view('ViewInicial');
    }
    
    /**
     * Busca a View de Cadastro do Funcionário
     * 
     * @return Object
     */
    public function getViewCadastroFuncionario() {
        return view('ViewCadastroFuncionario');
    }
    
    /**
     * Busca a View de Cadstro do Território
     * 
     * @return Object
     */
    public function getViewCadastroTerritorio() {
        return view('ViewCadastroTerritorio');
    }
    
    /**
     * Busca a View de Cadastro da Região
     * 
     * @return Object
     */
    public function getViewCadastroRegiao() {
        return view('ViewCadastroRegiao');
    }
    
}