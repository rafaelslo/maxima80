<?php

require_once("./Classes/classes.php");
require_once("./inc.funcoesExibicao.php");

class ListaNotificacoes extends Model {

    private $notificacoes = array();

    public function carrega() {
        $this->conectar();
        
        //Notificações de votação pendente
        $query = "Select count(*) from musicas where id not in (select id_musica from votos where id_integrante=".$_SESSION["m80Usuario"].") AND id_status=1;";
        $resultado = $this->query($query);
        $this->desconectar();
        
        if ($resultado[0][0]>0) {
            $notificacao = new Notificacao();
            $notificacao->setIcone("envelope.png");
            $notificacao->setTexto("<B>".$resultado[0][0]."</B> música(s) pendente(s) de votação");
            $notificacao->setAtalho("musicas/votar");
            $notificacao->setTotal($resultado[0][0]);
            $this->notificacoes[] = $notificacao;
        }

    }

    public function getNotificacoes() {
        return $this->notificacoes;
    }

    public function setNotificacoes($notificacoes) {
        $this->notificacoes = $notificacoes;
    }
    
    public function countNotificacoes() {
        $total = 0;
        foreach ($this->notificacoes as $notif) {
            $total += $notif->getTotal();
        }
        //return count($this->notificacoes);
        return $total;
    }

}

class Notificacao extends Model {

    private $icone;
    private $texto;
    private $atalho;
    private $total;

    public function getIcone() {
        return $this->icone;
    }

    public function setIcone($icone) {
        $this->icone = $icone;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getAtalho() {
        return $this->atalho;
    }

    public function setAtalho($atalho) {
        $this->atalho = $atalho;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }


    
}
?>

