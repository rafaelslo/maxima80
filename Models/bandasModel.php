<?php

require_once("./Classes/classes.php");

class ListaBandas extends Model {

    private $bandas = array();

    public function carrega() {
        $this->conectar();
        $query = "SELECT A.* , 
            (SELECT COUNT( id ) FROM musicas WHERE id_banda = A.id) total, 
            (SELECT COUNT( id ) FROM musicas WHERE id_banda = A.id AND id_status >1 AND id_status <>3) aprovadas
        FROM bandas A
        ORDER BY A.nome ASC;";
        
        $resultado = $this->query($query);
        $this->desconectar();

        foreach ($resultado as $result) {
            $banda = new Banda();
            $banda->setId($result["id"]);
            $banda->setNome($result["nome"]);
            $banda->setNumMusicas($result["total"]);
            $banda->setNumAprovadas($result["aprovadas"]);
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
    private $numAprovadas;

    /**
     * 
     * @param String $cpf CPF do usuario a ser carregado
     */
    public function carrega($id,$totais = false) {
        $this->conectar();
        if($totais) {
            $query = "SELECT *, 
                (SELECT COUNT( id ) FROM musicas WHERE id_banda = A.id) total, 
                (SELECT COUNT( id ) FROM musicas WHERE id_banda = A.id AND id_status >1 AND id_status <>3) aprovadas
                FROM bandas 
                WHERE id=" . $id . ";";
        } else {
            $query = "SELECT * FROM bandas WHERE id=" . $id . ";";
            
        }
        $result = $this->query($query);
        $this->desconectar();
        $this->setId($result[0]["id"]);
        $this->setNome($result[0]["nome"]);
        $this->setNumMusicas($result[0]["total"]);
        $this->setNumAprovadas($result[0]["aprovadas"]);
    }
    
    public function grava($request) {
        $this->conectar();
        $query = "select * from bandas where nome='".$request["inputDescricao"]."'";
        $result = $this->query($query);
        if (is_array($result)) {
            return "Já existe banda '".$request["inputDescricao"]."'";
        } else {
            $query = "INSERT INTO bandas (`id` ,`nome`)
                    VALUES (NULL ,  '" . $request["inputDescricao"] . "');";
            $result = $this->query($query);
        }
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
    
    public function getNumAprovadas() {
        return $this->numAprovadas;
    }

    public function setNumAprovadas($numAprovadas) {
        $this->numAprovadas = $numAprovadas;
    }
}
?>

