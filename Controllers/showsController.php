<?php

session_start();
require_once("./Views/showsView.php");
require_once("./Models/showsModel.php");
require_once("./Models/musicasModel.php");
require_once("./Models/musicasShowsModel.php");

/*
 * Controller que administra as telas de entrada e alteração de dados de sessão do usuário
 */

class showsController extends Controller {

    public function __construct() {
        // instanciamos os objetos
        //TODO: revisar o instanciamento destes objetos
        $this->view = new showsView();
    }

    function main() {
        $shows = new ListaShows();
        $shows->carrega();
        $this->view->exibirListaShows($shows->getShows(),$erro);
    }

    function formIncluirShow() {
        $this->view->exibirFormIncluirShow();
    }

    function incluirShow() {
        $shows = new Show();
        $resultado = $shows->grava($_REQUEST);
        $shows = new ListaShows();
        $shows->carrega();
        $this->view->exibirListaShows($shows->getShows(),$erro);
    }
    
    function apagarShow($idShow) {
        $show = new Show();
        $show->apaga($idShow);
        $shows = new ListaShows();
        $shows->carrega();
        $erro = $_SESSION["erro"];
        $_SESSION["erro"] = "";
        $this->view->exibirListaShows($shows->getShows(),$erro); 
    }

    function detalha($id) {
        $musicas = new ListaMusicas();
        $musicas->carrega("Livres&" . $id);
        $bloco1 = new ListaMusicas();
        $bloco1->carrega("1#" . $id);
        $bloco2 = new ListaMusicas();
        $bloco2->carrega("2#" . $id);
        $bis = new ListaMusicas();
        $bis->carrega("3#" . $id);
        $show = new show();
        $show->carrega($id);
        $this->view->exibirDetalhesShow($show, $musicas->getMusicas(), $bloco1->getMusicas(), $bloco2->getMusicas(), $bis->getMusicas());
    }

    function setlist($parametros) {
        echo (string)$parametros;                
        $show = intval(substr($parametros, 1, 3));
        $blocoantigo = substr($parametros, 4, 1);
        $bloconovo = substr($parametros, 5, 1);
        $musica = intval(substr($parametros, 6, 3));
        $posicaoinicial = intval(substr($parametros, 9, 3));
        $posicaofinal = intval(substr($parametros, 12, 3));
        $nshow = new Show();
        $nshow->gravaSetlist($show, $blocoantigo, $bloconovo, $musica, $posicaoinicial, $posicaofinal);
    }

    function imprimir($id) {
        $bloco1 = new ListaMusicas();
        $bloco1->carrega("1#" . $id);
        $bloco2 = new ListaMusicas();
        $bloco2->carrega("2#" . $id);
        $bis = new ListaMusicas();
        $bis->carrega("3#" . $id);
        $show = new show();
        $show->carrega($id);
        $this->view->imprimirDetalhesShow($show, $bloco1->getMusicas(), $bloco2->getMusicas(), $bis->getMusicas());
    }
    
    function imprimirHorizontal($id) {
        $bloco1 = new ListaMusicas();
        $bloco1->carrega("1#" . $id);
        $bloco2 = new ListaMusicas();
        $bloco2->carrega("2#" . $id);
        $bis = new ListaMusicas();
        $bis->carrega("3#" . $id);
        $show = new show();
        $show->carrega($id);
        $this->view->imprimirDetalhesShowHorizontal($show, array_merge($bloco1->getMusicas(),$bloco2->getMusicas(),$bis->getMusicas()));
    }

        function imprimirHorizontalPequeno($id) {
        $bloco1 = new ListaMusicas();
        $bloco1->carrega("1#" . $id);
        $bloco2 = new ListaMusicas();
        $bloco2->carrega("2#" . $id);
        $bis = new ListaMusicas();
        $bis->carrega("3#" . $id);
        $show = new show();
        $show->carrega($id);
        $this->view->imprimirDetalhesShowHorizontalPequeno($show, $bloco1->getMusicas(), $bloco2->getMusicas(), $bis->getMusicas());
    }

    
    function gravaSetlist() {
        if($_REQUEST["id_show"]!="") {
        $nshow = new show();
        $nshow->setId($_REQUEST["id_show"]);
        $nshow->atualizaSetlist($_REQUEST);
        $this->detalha($nshow->getId());
        }else{
            $this->main();
        }
    }

}

?>
