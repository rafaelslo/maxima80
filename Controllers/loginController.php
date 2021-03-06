<?php
session_start();
require_once("./Views/loginView.php");
require_once("./Models/integrantesModel.php");
require_once("./Models/notificacoesModel.php");

/*
 * Controller que administra as telas de entrada e alteração de dados de sessão do usuário
 */

class loginController extends Controller {

    public function __construct() {
        // instanciamos os objetos
        //TODO: revisar o instanciamento destes objetos
        $this->view = new loginView();
    }

    /*
     * Exibe a tela inicial do sistema para login do usuário
     */

    public function telaLogin() {
        $this->view->exibirTelaLogin();
    }

    /**
     * Encerra a sessão do usuário no banco de dados, elimina as variáveis de sessão no navegador e mostra a tela de login
     */
    public function logoff() {
        $base = $_SESSION["baseURL"];
        unset($_SESSION);
        $_SESSION["baseURL"] = $base;

        $this->telaLogin();
        die();
    }

    /*
     * Cria a sessão do usuário na Banco de Dados e verifica as suas credenciais para cesso ao sistema
     */

    public function efetivaLogin() {

        $integrante = new Integrante();
        $resp = $integrante->valida($_REQUEST);
        if(!is_bool($resp)) {
            $this->view->exibirTelaLogin($resp,$_REQUEST["Email"]);
            return;
        }

        $_SESSION["m80Usuario"] = $integrante->getId();
        $_SESSION["m80Usuario_nome"] = $integrante->getNome();
        $_SESSION["m80Usuario_mail"] = $integrante->getMail();

        $listaNot = new ListaNotificacoes();
        $listaNot->carrega();

        
        $this->boasvindas();
        return;
    }

    /*
     * Exibe a tela inicial padrao do sistema
     */

    public function boasvindas() {
        $this->view->exibirTelaBoasVindas();
    }

    /**
     * Exibe a tela de falha de aautenticação
     */
    public function exibirTelaFalhaAutenticao() {
        $this->view->exibirTelaFalhaAutenticao();
        die();
    }



}

?>
