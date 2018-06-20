<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerRegiao extends Controller {
    
    public function getSqlPadraoConsultaRegiao() {
        $bRegiao = DB::select('SELECT * FROM regiao ');
        return view('ViewConsultaRegiao')->with('regiao', $bRegiao);
    }
    
}