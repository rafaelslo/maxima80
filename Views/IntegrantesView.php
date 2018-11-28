<?php

class integrantesView extends View {

    public function exibirListaIntegrantes($integrantes) {
        $this->atribuirValor("integrantes", $integrantes);
        $this->mostrarNaTela('integrantes.tpl');
    }

    public function exibirFormIncluirIntegrante() {
        $this->mostrarNaTela('formIncluirIntegrante.tpl');
    }
    
    public function exibirDetalhesIntegrante($integrante) {
        $this->atribuirValor("integrante", $integrante);
        $this->mostrarNaTela('integranteDetalhes.tpl');
    }
}

?>