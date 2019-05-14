<?php

class showsView extends View {

    public function exibirListaShows($shows,$erro) {
        $this->atribuirValor("shows", $shows);
        $this->atribuirValor("erro", $erro);
        $this->mostrarNaTela('shows.tpl');
    }

    public function exibirFormIncluirShow() {
        $this->mostrarNaTela('formIncluirShow.tpl');
    }

    public function exibirDetalhesShow($show, $prontas, $bloco1, $bloco2, $bis) {
        $this->atribuirValor("show", $show);
        $this->atribuirValor("prontas", $prontas);
        $this->atribuirValor("bloco1", $bloco1);
        $this->atribuirValor("bloco2", $bloco2);
        $this->atribuirValor("bis", $bis);
        $this->mostrarNaTela('showDetalhes.tpl');
    }

    public function imprimirDetalhesShow($show, $bloco1, $bloco2, $bis) {
        $this->atribuirValor("show", $show);
        $this->atribuirValor("bloco1", $bloco1);
        $this->atribuirValor("bloco2", $bloco2);
        $this->atribuirValor("bis", $bis);
        $this->mostrarNaTela('showDetalhesImprimir.tpl');
    }
    public function imprimirDetalhesShowHorizontal($show, $musicas) {
        $this->atribuirValor("show", $show);
        $this->atribuirValor("musicas", $musicas);
        $this->mostrarNaTela('showDetalhesImprimirHorizontal.tpl');
    }
    public function imprimirDetalhesShowHorizontalPequeno($show, $musicas) {
        $this->atribuirValor("show", $show);
        $this->atribuirValor("musicas", $musicas);
        $this->mostrarNaTela('showDetalhesImprimirHorizontalPequeno.tpl');
    }
}

?>