<?php

require_once("./Classes/classes.php");

class ListaIntegrantes extends Model {

    private $integrantes = array();

    public function carrega($status = "") {
        $this->conectar();
        $query = "SELECT * FROM integrantes;";
        if($status<>"") {
            $query = "SELECT * FROM integrantes WHERE status='".$status."';";
        }
        $resultado = $this->query($query);
        $this->desconectar();

        foreach ($resultado as $result) {
            $integrante = new Integrante();
            $integrante->setId($result["id"]);
            $integrante->setNome($result["nome"]);
            $integrante->setSenha($result["senha"]);
            $integrante->setMail($result["email"]);
            $integrante->setStatus($result["status"]);
            $this->addIntegrante($integrante);
        }
    }
    
    public function getSel($id='') {
        $retorna = "<select class='form-control' id='inputIntegrante' name='inputIntegrante'>";
        $retorna.="<option value='0'>Todos</option>";
        foreach ($this->integrantes as $integrante) {
            if($id==$integrante->getId()) {
                $retorna.="<option selected value='" . $integrante->getId() . "'>" . $integrante->getNome() . "</option>";                
            } else {
                $retorna.="<option value='" . $integrante->getId() . "'>" . $integrante->getNome() . "</option>";
            }
        }
        $retorna.="</select>";
        return $retorna;
    }    

    public function getIntegrantes() {
        return $this->integrantes;
    }

    public function setIntegrantes($integrantes) {
        $this->integrantes = $integrantes;
    }

    public function addIntegrante($integrantes) {
        $this->integrantes[] = $integrantes;
    }

}

class Integrante extends Model {

    private $id;
    private $nome;
    private $senha;
    private $mail;
    private $status;

    /**
     * 
     * @param String $cpf CPF do usuario a ser carregado
     */
    public function valida($valores) {
        $this->conectar();
        $query = "SELECT * FROM integrantes WHERE email='" . $valores["Email"] . "';";
        $result = $this->query($query);
        $this->desconectar();

        if (!$result) {
            return "Usuário não encontrado";
        } elseif (sha1($valores["Password"]) != $result[0]["senha"]) {
            return "senha Inválida";
        } elseif ($result[0]["status"]<>"Ativo") {
            return "Usuário inativo";
        } else {
            $this->setId($result[0]["id"]);
            $this->setNome($result[0]["nome"]);
            $this->setMail($result[0]["email"]);
            $this->setStatus($result[0]["status"]);
            return true;
        }
    }

    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM integrantes WHERE id='" . $id . "';";
        $result = $this->query($query);
        $this->desconectar();

        if (!is_bool($result)) {
            $this->id = $result[0]["id"];
            $this->nome = $result[0]["nome"];
            $this->mail = $result[0]["email"];
            $this->status = $result[0]["status"];
        }
    }

    public function grava($request) {
        $this->conectar();
        $nome = explode(" ",$request["inputNome"]);
        $query = "INSERT INTO integrantes (`id` ,`nome` ,`email` ,`senha` ,`status`)
                VALUES (NULL ,  '" . $request["inputNome"] . "',  '" . $request["inputMail"] . "',  '" . sha1($nome[0]) . "',  'Ativo');";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function gravaStatus($id,$status) {
        $this->conectar();
        $query = "UPDATE  integrantes SET  `status` =  '" . ($status?"Inativo":"Ativo") . "' WHERE  `id` =" . $id . ";";
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

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
?>

