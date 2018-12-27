<?php
session_start(); //carrega as variáveis de sessão
if($_SERVER["SERVER_NAME"]=="maxima80.xyz")
    $_SESSION["baseURL"]="http://".$_SERVER["SERVER_NAME"];
else
    $_SESSION["baseURL"]="http://".$_SERVER["SERVER_NAME"]."/maxima80";


// adiciona as classes
require_once("./libs/Smarty.class.php");
require_once("./Classes/classes.php");

$separa=explode("/",$_REQUEST["modulo"]);
$modulo=$separa[0];
$acao=$separa[1];
$id=$separa[2];
      
if($modulo=="") {
    require_once("Controllers/loginController.php");
    $instancia = new loginController();
    $instancia->telaLogin();
    die();
} elseif($modulo=="webService") {
    include_once("webService/index.php");
    die();
} else {
    if($acao=="") {
        die("Nenhuma acao definida");
    } else {
        $controlador=$modulo;
    }
}

if(($_SESSION["m80Usuario_nome"]=="") AND ($controlador!="login" AND $acao!="telaLogin")) {
    require_once("Controllers/loginController.php");
    $instancia = new loginController();
    $instancia->exibirTelaFalhaAutenticao();
}

require_once("./Models/notificacoesModel.php");
$listaNot = new ListaNotificacoes();
$listaNot->carrega();

$_SESSION["queries"]="";
require_once("Controllers/".$controlador."Controller.php");
eval('$instancia = new ' . $controlador . 'Controller();');
if($id==""){
    eval('$instancia->' . $acao. '();');
} else {
    $param = $id;
    eval('$instancia->' . $acao. '('.$param.');');
}

?>
