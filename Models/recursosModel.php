<?php

require_once("./Classes/classes.php");
require_once("./inc.funcoesExibicao.php");
require_once("./Models/integrantesModel.php");

class ListaRecursos extends Model {

    private $recursos = array();

    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM recursos WHERE id_musica=" . $id . ";";
        $resultado = $this->query($query);
        $this->desconectar();

        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $recurso = new Recurso();
                $recurso->carrega($result);
                $this->recursos[] = $recurso;
            }
        }
    }

    public function getRecursos() {
        return $this->recursos;
    }

    public function setRecursos($recursos) {
        $this->recursos = $recursos;
    }
    
    public function countRecursos() {
        return count($this->recursos);
    }
    

}

class Recurso extends Model {

    private $id;
    private $idMusica;
    private $tipo;
    private $recurso;
    private $data;
    private $integrante;

    public function carrega($dado) {
        $this->setId($dado["id"]);
        $this->setidMusica($dado["id_musica"]);
        $this->setTipo($dado["tipo"]);
        $this->setRecurso($dado["recurso"]);
        $this->setData($dado["data"]);
        $this->setintegrante($dado["id_integrante"]);
    }

    public function grava($request) {
        $this->conectar();
        $query = "INSERT INTO recursos (`id` ,`id_musica` ,`tipo` ,`recurso` ,`operador`)
                VALUES (NULL ,  '" . $request["inputId"] . "',  '" . $request["inputTipo"] . "',  '" . $request["inputRecurso"] . "',  '" . $_SESSION["m80Usuario"] . "');";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function remove($id) {
        $this->conectar();

        $query = "UPDATE `recursos` SET `operador` = ".$_SESSION["m80Usuario"]." WHERE `id`=".$id." LIMIT 1;";
        $result = $this->query($query);
        
        $query = "DELETE FROM recursos WHERE `id`=". $id . " LIMIT 1;";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdMusica() {
        return $this->idMusica;
    }

    public function setIdMusica($idMusica) {
        $this->idMusica = $idMusica;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getRecurso() {
        return $this->recurso;
    }

    public function setRecurso($recurso) {
        $this->recurso = $recurso;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = mysql_date_para_humano($data);
    }

    public function getIntegrante() {
        return $this->integrante;
    }

    public function setIntegrante($integrante) {
        $integ = new Integrante();
        $integ->carrega($integrante);
        $this->integrante = $integ->getNome();
    }

}
?>

