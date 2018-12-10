<?php

session_start();
require_once("./Views/logView.php");
require_once("./Models/integrantesModel.php");
require_once("./Models/logModel.php");

/*
 * Controller que administra as telas de entrada e alteração de dados de sessão do usuário
 */

class logController extends Controller {

    public function __construct() {
        // instanciamos os objetos
        //TODO: revisar o instanciamento destes objetos
        $this->view = new logView();
    }

    function main() {
        $integrantes = new ListaIntegrantes();
        $integrantes->carrega();

        $logs = new Listalogs();
        $logs->carrega($_REQUEST);
        
        $this->view->exibirListaLogs($integrantes->getSel($_REQUEST["inputIntegrante"]),$logs->getLogs(),$_REQUEST);
    }

}

?>
