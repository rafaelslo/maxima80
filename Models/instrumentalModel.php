<?php

require_once("./Classes/classes.php");
require_once("./Models/instrumentosModel.php");
require_once("./Models/integrantesModel.php");

class ListaInstrumental extends Model {

    private $instrumental = array();

    public function carrega($id) {

        $this->conectar();
        $query = "SELECT * FROM instrumental WHERE idMusica=" . $id . ";";
        $resultado = $this->query($query);
        $this->desconectar();

        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $instrumental = new Instrumental();
                $instrumental->setId($result["id"]);
                $integ = new Integrante();
                $integ->carrega($result["idIntegrante"]);
                $instrumental->setIntegrante($integ);
                $instrumento = new Instrumento();
                $instrumento->carrega($result["idInstrumento"]);
                $instrumental->setInstrumento($instrumento);
                $this->instrumental[] = $instrumental;
            }
        }
    }

    public function grava($request) {
        $this->conectar();
        $query = "INSERT INTO instrumental (`id` ,`idMusica` ,`idIntegrante` ,`idInstrumento`)
                VALUES (NULL ,  '" . $request["inputId"] . "',  '" . $request["inputIntegrante"] . "',  '" . $request["inputInstrumento"] . "');";
        $result = $this->query($query);
        $this->desconectar();
    }    
    
    public function remove($id) {
        $this->conectar();
        $query = "DELETE FROM instrumental WHERE id='" . $id . "';";
        $result = $this->query($query);
        $this->desconectar();
    }    
    
    public function getInstrumental() {
        return $this->instrumental;
    }

    public function setInstrumental($instrumental) {
        $this->instrumental = $instrumental;
    }

}

class Instrumental extends Model {
    private $id;
    private $integrante;
    private $instrumento;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIntegrante() {
        return $this->integrante;
    }

    public function setIntegrante($integrante) {
        $this->integrante = $integrante;
    }

    public function getInstrumento() {
        return $this->instrumento;
    }

    public function setInstrumento($instrumento) {
        $this->instrumento = $instrumento;
    }

}
?>

