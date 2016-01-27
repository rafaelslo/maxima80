<?php

require_once("./Classes/classes.php");

class ListaStatus extends Model {

    private $status = array();

    public function carrega() {
        $this->conectar();
        $queries[] = "SELECT * FROM status;";
        $resultado = $this->query($queries);
        $this->desconectar();

        foreach ($resultado as $result) {
            $status = new Status();
            $status->setId($result["id"]);
            $status->setNome($result["status"]);
            $status->setCor($result["cor"]);
            $this->addStatus($status);
        }
    }

    public function getStatus() {
        return $this->$status;
    }

    public function setStatus($bandas) {
        $this->status = $status;
    }

    public function addStatus($status) {
        $this->status[] = $status;
    }

}

class Status extends Model {

    private $id;
    private $nome;
    private $cor;

    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM status WHERE id=" . $id . ";";
        $result = $this->query($query);
        $this->desconectar();

        $this->setId($result[0]["id"]);
        $this->setNome($result[0]["status"]);
        $this->setCor($result[0]["cor"]);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($cpf) {
        $this->cpf = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

}
?>

