<?php

class bandasView extends View {

    public function exibirListaBandas($resultado,$bandas) {
        $this->atribuirValor("mensagem", $resultado);
        $this->atribuirValor("bandas", $bandas);
        $this->mostrarNaTela('bandas.tpl');
    }

    public function exibirFormIncluirBanda() {
        $this->mostrarNaTela('formIncluirBanda.tpl');
    }

}

?>