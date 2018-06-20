<?php

namespace App\Http\Controllers;

class ControllerPrincipal extends Controller {
    
    public function getViewInicial() {
        return view('ViewInicial');
    }
    
}