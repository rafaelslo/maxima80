<?php

class logView extends View {

    public function exibirListaLogs($selIntegrantes,$logs,$request) {
        $this->atribuirValor("logs", $logs);
        $this->atribuirValor("selIntegrantes", $selIntegrantes);
        $this->atribuirValor("request", $request);
        $this->mostrarNaTela('logs.tpl');
    }

}

?>