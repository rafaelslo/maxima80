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
        $this->view->exibirListaShows($shows->getShows());
    }

    function formIncluirShow() {
        $this->view->exibirFormIncluirShow();
    }

    function incluirShow() {
        $shows = new Show();
        $resultado = $shows->grava($_REQUEST);
        $shows = new ListaShows();
        $shows->carrega();
        $this->view->exibirListaShows($shows->getShows());
    }

    function detalha($id) {
        $musicas = new ListaMusicas();
        $musicas->carrega("Livres&".$id);
        $bloco1 = new ListaMusicas();
        $bloco1->carrega("1#".$id);
        $bloco2 = new ListaMusicas();
        $bloco2->carrega("2#".$id);
        $bis = new ListaMusicas();
        $bis->carrega("3#".$id);
        $show = new show();
        $show->carrega($id);
        $this->view->exibirDetalhesShow($show,$musicas->getMusicas(),$bloco1->getMusicas(),$bloco2->getMusicas(),$bis->getMusicas());
    }
    
    function setlist($parametros) {
        $show = intval(substr($parametros, 1, 3));
        $musica = intval(substr($parametros, 4, 3));
        $bloco = substr($parametros, 7, 1);
        $posicao = intval(substr($parametros, 8, 3));
        $nshow = new Show();
        $nshow->gravaSetlist($musica, $show, $bloco,$posicao);
    }

}

?>
