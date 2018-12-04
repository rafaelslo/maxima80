<?php
class loginView extends View {
    /**
     * Exibe a tela inicial de login
     *
     */
    public function exibirTelaLogin($mensagem = "",$email = "") {
        $this->atribuirValor("mensagem", $mensagem);
        $this->atribuirValor("email", $email);
        $this->mostrarNaTela('login.tpl');
    }

    /**
     * Exibe a tela informando falha de autenticação ou encerramento de sessão
     *
     */
    public function exibirTelaFalhaAutenticao() {
        $this->mostrarNaTela('falhaAutenticacao.tpl');
    }

   
    /**
     * Exibe a tela inicial do sistema
     * 
     */
    public function exibirTelaBoasVindas() {
        $this->mostrarNaTela('boasvindas.tpl');
    }
    /**
     * 
     * @param Preferencias $preferencias
     */
    function exibirMinhasConfiguracoes($preferencias) {
        $this->atribuirValor("preferencias", $preferencias);
        $this->mostrarNaTela("minhasConfiguracoes.tpl");
    }    
    
}
?>