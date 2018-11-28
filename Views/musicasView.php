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

    public function exibirListaMusicasVotar($musicas,$integrantes) {
        $this->atribuirValor("musicas", $musicas);
        $this->atribuirValor("integrantes", $integrantes);
        $this->mostrarNaTela('musicasVotar.tpl');
    }

    public function exibirDetalhesMusica($musica,$integrantes) {
        $this->atribuirValor("musica", $musica);
        $this->atribuirValor("integrantes", $integrantes);
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
    
    public function exibirFormIncluirInstrumental($musica,$integrantes,$instrumentos) {
        $this->atribuirValor("musica", $musica);
        $this->atribuirValor("integrantes", $integrantes);
        $this->atribuirValor("instrumentos", $instrumentos);
        $this->mostrarNaTela('formIncluirInstrumental.tpl');
    }

}

?>