<?php

session_start();
require_once("./Views/bandasView.php");
require_once("./Models/bandasModel.php");

/*
 * Controller que administra as telas de entrada e alteração de dados de sessão do usuário
 */

class bandasController extends Controller {

    public function __construct() {
        // instanciamos os objetos
        //TODO: revisar o instanciamento destes objetos
        $this->view = new bandasView();
    }

    function main() {
        $bandas = new Listabandas();
        $bandas->carrega();
        $this->view->exibirListaBandas($bandas->getBandas());
    }

    function formIncluirBanda() {
        $this->view->exibirFormIncluirBanda();
    }

    function incluirBanda() {
        $banda = new banda();
        $resultado = $banda->grava($_REQUEST);
        $bandas = new Listabandas();
        $bandas->carrega();
        $this->view->exibirListaBandas($bandas->getBandas());
    }

}

?>
