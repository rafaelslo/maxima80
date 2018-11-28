<?php

require_once("./Classes/classes.php");

class Instrumentos extends Model {

    private $instrumentos = array();

    public function carrega() {

        $this->conectar();
        $query = "SELECT * FROM instrumentos";
        $resultado = $this->query($query);
        $this->desconectar();

        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $inst = new Instrumento();
                $inst->setId($result["id"]);
                $inst->setNome($result["Nome"]);
                $inst->setIcone($result["icone"]);
                $this->instrumentos[] = $inst;
            }
        }
    }

    public function getInstrumentos() {
        return $this->instrumentos;
    }

    public function setInstrumentos($instrumentos) {
        $this->instrumentos = $instrumentos;
    }

}

class Instrumento extends Model {
    private $id;
    private $nome;
    private $icone;
    
    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM instrumentos WHERE id='" . $id . "';";
        $result = $this->query($query);
        $this->desconectar();

        if (!is_bool($result)) {
            $this->id = $result[0]["id"];
            $this->nome = $result[0]["Nome"];
            $this->icone = $result[0]["icone"];
        }        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIcone() {
        return $this->icone;
    }

    public function setIcone($icone) {
        $this->icone = $icone;
    }

}
?>

