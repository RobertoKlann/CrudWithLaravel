<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

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
    
    /**
     * Realiza o INSERT no banco de dados.
     * 
     * @return Object
     */
    public function insereRegiao() {
        $aCampos = Request::all();
        DB::insert("INSERT INTO regiao(IDRegiao, DescricaoRegiao) "
                      . "VALUES(" . $aCampos['IDRegiao'] . ", '" . $aCampos['DescricaoRegiao'] . "')");
        
        return view('ViewRegiaoAdicionado')->with('DescricaoRegiao', $aCampos['DescricaoRegiao']);
    }
    
    /**
     * Realiza o DELETE da Região.
     * 
     * @param type $IDRegiao
     * @return type
     */
    public function deleteRegiao($IDRegiao) {
        DB::table('regiao')->where('IDRegiao', '=', $IDRegiao)->delete();
        
        return redirect()->action('ControllerRegiao@getSqlPadraoConsultaRegiao');
    }
    
    /**
     * Busca a Região a ser alterada.
     *  
     * @param type $IDRegiao
     * @return type
     */
    public function getConsultaRegiaoFromUpdate($IDRegiao) {
        $bRegiao = DB::select('SELECT * FROM regiao WHERE IDRegiao = ' .$IDRegiao);
        return view('ViewAlteraRegiao')->with('regiao', $bRegiao);
    }
    
    /**
     * Realiza o UPDATE para a Região.
     * 
     * @return type
     */
    public function updateRegiao() {
        $IDRegiao        = Request::input('IDRegiao');
        $DescricaoRegiao = Request::input('DescricaoRegiao');
        DB::table('regiao')->where('IDRegiao', '=', $IDRegiao)->update(['IDRegiao' => $IDRegiao, 'DescricaoRegiao' => $DescricaoRegiao]);
        
        return view('ViewRegiaoAlterado')->with('DescricaoRegiao', $DescricaoRegiao);
    }
    
}