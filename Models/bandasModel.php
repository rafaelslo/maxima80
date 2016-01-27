<?php

require_once("./Classes/classes.php");

class ListaBandas extends Model {

    private $bandas = array();

    public function carrega() {
        $this->conectar();
        $query = "SELECT * FROM bandas ORDER BY nome ASC;";
        $resultado = $this->query($query);
        $this->desconectar();

        foreach ($resultado as $result) {
            $banda = new Banda();
            $banda->setId($result["id"]);
            $banda->setNome($result["nome"]);

            $this->conectar();
            $query = "SELECT count(*) as total FROM musicas WHERE id_banda=" . $result["id"] . ";";
            $total = $this->query($query);
            $this->desconectar();

            $banda->setNumMusicas($total[0]["total"]);
            $this->addBanda($banda);
        }
    }

    public function getSel() {
        $retorna = "<select class='form-control' id='inputBanda' name='inputBanda'>";
        foreach ($this->bandas as $banda) {
            $retorna.="<option value='" . $banda->getId() . "'>" . $banda->getNome() . "</option>";
        }
        $retorna.="</select>";
        return $retorna;
    }

    public function getBandas() {
        return $this->bandas;
    }

    public function setBandas($bandas) {
        $this->bandas = $bandas;
    }

    public function addBanda($bandas) {
        $this->bandas[] = $bandas;
    }

}

class Banda extends Model {

    private $id;
    private $nome;
    private $numMusicas;

    /**
     * 
     * @param String $cpf CPF do usuario a ser carregado
     */
    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM bandas WHERE id=" . $id . ";";
        $result = $this->query($query);
        $this->desconectar();

        $this->setId($result[0]["id"]);
        $this->setNome($result[0]["nome"]);

        $this->conectar();
        $query = "SELECT count(*) as total FROM musicas WHERE id_banda=" . $id . ";";
        $total = $this->query($query);
        $this->desconectar();
        $this->setNumMusicas($total[0]["total"]);
    }
    
    public function grava($request) {
        $this->conectar();
        $query = "INSERT INTO bandas (`id` ,`nome`)
                VALUES (NULL ,  '" . $request["inputDescricao"] . "');";
        $result = $this->query($query);
        $this->desconectar();
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

    public function getNumMusicas() {
        return $this->numMusicas;
    }

    public function setNumMusicas($numMusicas) {
        $this->numMusicas = $numMusicas;
    }

}
?>

