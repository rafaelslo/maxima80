<?php

require_once("./Views/musicasView.php");
require_once("./Models/musicasModel.php");
require_once("./Models/bandasModel.php");

/**
 * <<Descricao da Classe>>
 *
 */
class musicasController extends Controller {

    public function __construct() {
        $this->view = new musicasView();
    }

    /**
     * <<Descricao do MÃ©todo>>
     *
     */
    function main() {
        $musicas = new ListaMusicas();
        $musicas->carrega("Todas");
        $this->view->exibirListaMusicas($musicas->getMusicas());
    }

    function detalha($id) {
        $musica = new Musica();
        $musica->carrega($id);
        $_SESSION["tempMusica"]=$musica->getId();
        $this->view->exibirDetalhesMusica($musica);
    }

    function votar() {
        $musicas = new ListaMusicas();
        $musicas->carrega("Votar");
        $this->view->exibirListaMusicasVotar($musicas->getMusicas());
    }

    function prontas() {
        $musicas = new ListaMusicas();
        $musicas->carrega("Prontas");
        $this->view->exibirListaMusicas($musicas->getMusicas());
    }

    function preparacao() {
        $musicas = new ListaMusicas();
        $musicas->carrega("Preparacao");
        $this->view->exibirListaMusicas($musicas->getMusicas());
    }

    function status($id) {
        $status = substr($id, -1);
        $idMusica = substr($id, 0, -1);
        $musica = new Musica();
        $musica->gravaStatus($idMusica, $status);
        $musica->carrega($idMusica);

        $this->view->exibirDetalhesMusica($musica);
    }

    function procVoto($parametros) {
        $musica = intval(substr($parametros, 1, 3));
        $integrante = intval(substr($parametros, 4, 3));
        $voto = substr($parametros, 7, 1);
        $votos = new Votos();
        $resultado = $votos->processaVoto($musica, $integrante, $voto);
        echo "Resultado: " . $resultado;
    }

    function formIncluirMusica() {
        $bandas = new ListaBandas();
        $bandas->carrega();
        $selBandas = $bandas->getSel();
        $this->view->exibirFormIncluirMusica($selBandas);
    }

    function incluirMusica() {
        $musica = new musica();
        $resultado = $musica->grava($_REQUEST);
        $musicas = new ListaMusicas();
        $musicas->carrega("Todas");
        $this->view->exibirListaMusicas($musicas->getMusicas());
    }

    function formIncluirRecurso($musica) {
        $this->view->exibirFormIncluirRecurso($musica);
    }

    function incluirRecurso() {
        $recurso = new recurso();
        $resultado = $recurso->grava($_REQUEST);
        $musica = new Musica();
        $musica->carrega($_REQUEST["inputId"]);
        $this->view->exibirDetalhesMusica($musica);
    }

    function removerRecurso($id) {
        $recurso = new recurso();
        $resultado = $recurso->remove($id);
        $musica = new Musica();
        $musica->carrega($_SESSION["tempMusica"]);
        $this->view->exibirDetalhesMusica($musica);
    }
    
}

?>