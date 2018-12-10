<?php

session_start();
require_once("./Views/integrantesView.php");
require_once("./Models/integrantesModel.php");

/*
 * Controller que administra as telas de entrada e alteração de dados de sessão do usuário
 */

class integrantesController extends Controller {

    public function __construct() {
        // instanciamos os objetos
        //TODO: revisar o instanciamento destes objetos
        $this->view = new integrantesView();
    }

    function main() {
        echo "chegou controller";
        $integrantes = new Listaintegrantes();
        $integrantes->carrega();
        $this->view->exibirListaIntegrantes($integrantes->getIntegrantes());
    }

    function formIncluirIntegrante() {
        $this->view->exibirFormIncluirIntegrante();
    }

    function incluirIntegrante() {
        $integrante = new integrante();
        $resultado = $integrante->grava($_REQUEST);
        $integrantes = new Listaintegrantes();
        $integrantes->carrega();
        $this->view->exibirListaIntegrantes($integrantes->getIntegrantes());
    }
    
    function detalha($id) {
        $integrante = new Integrante();
        $integrante->carrega($id);
        $_SESSION["tempIntegrante"] = $integrante->getId();
        $this->view->exibirDetalhesIntegrante($integrante);
    }
    
    function status($id) {
        $status = substr($id, -1);
        $idIntegrante = substr($id, 0, -1);
        $integrante = new Integrante();
        $integrante->gravaStatus($idIntegrante,$status);
        
        $this->main();
    }

}
?>
