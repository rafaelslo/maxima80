<?php

require_once("./Classes/classes.php");

class ListaIntegrantes extends Model {

    private $integrantes = array();

    public function carrega() {
        $this->conectar();
        $queries[] = "SELECT * FROM integrantes;";
        $resultado = $this->query($queries);
        $this->desconectar();

        foreach ($resultado as $result) {
            $integrante = new Integrante();
            $integrante->setId($result["id"]);
            $integrante->setNome($result["nome"]);
            $integrante->setSenha($result["senha"]);
            $integrante->setMail($result["email"]);
            $this->addIntegrante($integrante);
        }
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

    /**
     * 
     * @param String $cpf CPF do usuario a ser carregado
     */
    public function valida($valores) {
        $this->conectar();
        $query = "SELECT * FROM integrantes WHERE email='" . $valores["Email"] . "';";
        $result = $this->query($query);
        $this->desconectar();

        if (count($result) == 0) {
            return "Usuário não encontrado";
        } elseif (sha1($valores["Password"]) != $result[0]["senha"]) {
            return "senha Inválida: " . $valores["Password"] . "-" . $result[0]["senha"];
        } else {
            $this->setId($result[0]["id"]);
            $this->setNome($result[0]["nome"]);
            $this->setMail($result[0]["email"]);
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

}
?>

