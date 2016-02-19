<?php

class musicasView extends View {

    public function exibirListaMusicas($musicas) {
        $this->atribuirValor("musicas", $musicas);
        $this->mostrarNaTela('musicas.tpl');
    }

    public function exibirListaMusicasImprimir($musicas) {
        $this->atribuirValor("musicas", $musicas);
        $this->mostrarNaTela('musicasImprimir.tpl');
    }

    public function exibirListaMusicasVotar($musicas) {
        $this->atribuirValor("musicas", $musicas);
        $this->mostrarNaTela('musicasVotar.tpl');
    }

    public function exibirDetalhesMusica($musica) {
        $this->atribuirValor("musica", $musica);
        $this->mostrarNaTela('musicaDetalhes.tpl');
    }

    public function exibirFormIncluirMusica($selBandas) {
        $this->atribuirValor("selBandas", $selBandas);
        $this->mostrarNaTela('formIncluirMusica.tpl');
    }

    public function exibirFormIncluirRecurso($musica) {
        $this->atribuirValor("musica", $musica);
        $this->mostrarNaTela('formIncluirRecurso.tpl');
    }

}

?>