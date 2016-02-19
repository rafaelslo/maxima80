<?php

require_once("./Classes/classes.php");
require_once("./Models/bandasModel.php");
require_once("./Models/statusModel.php");
require_once("./Models/votosModel.php");
require_once("./Models/recursosModel.php");

class ListaMusicas extends Model {

    private $musicas = array();

    public function carrega($escopo) {
        $this->conectar();
        if ($escopo == "Todas")
            $query = "SELECT * FROM musicas;";
        elseif ($escopo == "Votar")
            $query = "SELECT * FROM musicas WHERE id_status=1;";
        elseif ($escopo == "Prontas")
            $query = "SELECT * FROM musicas WHERE id_status=2;";
        elseif ($escopo == "Preparacao")
            $query = "SELECT * FROM musicas WHERE id_status=5;";
        elseif (strpos($escopo, "&") > 0) {
            $res = explode("&", $escopo);
            $query = "SELECT * FROM musicas WHERE id not in (select id_musica from showsmusicas where id_show=" . $res[1] . ") AND id_status=2;";
        } elseif (strpos($escopo, "#") > 0) {
            $res = explode("#", $escopo);
            $query = "SELECT t1.* FROM musicas as t1 INNER JOIN showsmusicas as t2 ON t1.id=t2.id_musica WHERE t2.bloco=" . $res[0] . " AND t2.id_show=" . $res[1] . " ORDER BY t2.posicao;";
        }
        //echo "<BR>query: ".$query;
        $resultado = $this->query($query);
        $this->desconectar();

        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $musica = new Musica();
                $musica->setId($result["id"]);
                $musica->setNome($result["nome"]);
                $musica->setDuracao($result["duracao"]);
                $banda = new Banda();
                $banda->carrega($result["id_banda"]);
                $musica->setIdBanda($banda->getId());
                $musica->setBanda($banda->getNome());
                $status = new Status();
                $status->carrega($result["id_status"]);
                $musica->setStatus($status);
                $editavel = false;
                if ($result["id_status"] == "1") {
                    $editavel = true;
                }
                $votos = new Votos();
                $votos->carrega($result["id"], $editavel);
                $musica->setVotos($votos);

                $recursos = new ListaRecursos();
                $recursos->carrega($result["id"]);
                $musica->setRecursos($recursos);

                $this->addMusica($musica);
            }
        }
    }

    public function getMusicas() {
        return $this->musicas;
    }

    public function setMusicas($musicas) {
        $this->musicas = $musicas;
    }

    public function addMusica($musicas) {
        $this->musicas[] = $musicas;
    }

    public function delMusica($musica) {
        if (($key = array_search($musica, $this->musicas)) !== false) {
            echo "apagar chave " . $key;
            //unset($this->musicas[$key]);
        }
    }

}

class Musica extends Model {

    private $id;
    private $nome;
    private $duracao;
    private $idBanda;
    private $banda;
    private $status;
    private $votos;
    private $recursos;

    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM musicas WHERE id='" . $id . "';";
        $result = $this->query($query);
        $this->desconectar();

        $this->setId($result[0]["id"]);
        $this->setNome($result[0]["nome"]);
        $this->setDuracao($result[0]["duracao"]);
        $banda = new Banda();
        $banda->carrega($result[0]["id_banda"]);
        $this->setIdBanda($banda->getId());
        $this->setBanda($banda->getNome());
        $status = new Status();
        $status->carrega($result[0]["id_status"]);
        $this->setStatus($status);
        $editavel = false;
        if ($result[0]["id_status"] == "1") {
            $editavel = true;
        }
        $votos = new Votos();
        $votos->carrega($result[0]["id"], $editavel);
        $this->setVotos($votos);
        $recursos = new ListaRecursos();
        $recursos->carrega($result[0]["id"]);
        $this->setRecursos($recursos->getRecursos());
    }

    public function grava($request) {
        $this->conectar();
        $query = "INSERT INTO musicas (`id` ,`nome` ,`id_banda` ,`duracao` ,`id_status`)
                VALUES (NULL ,  '" . $request["inputDescricao"] . "',  '" . $request["inputBanda"] . "',  '" . $request["inputDuracao"] . "',  '1');";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function apaga($id) {
        $this->conectar();
        $query = "DELETE FROM musicas WHERE id='" . $id . "';";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function gravaStatus($musica, $status) {
        $this->conectar();
        $query = "UPDATE  musicas SET  `id_status` =  '" . $status . "' WHERE  `id` =" . $musica . ";";
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

    public function getDuracao() {
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getIdBanda() {
        return $this->idBanda;
    }

    public function setIdBanda($idBanda) {
        $this->idBanda = $idBanda;
    }

    public function getBanda() {
        return $this->banda;
    }

    public function setBanda($banda) {
        $this->banda = $banda;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getVotos() {
        return $this->votos;
    }

    public function setVotos($votos) {
        $this->votos = $votos;
    }

    public function getRecursos() {
        return $this->recursos;
    }

    public function setRecursos($recursos) {
        $this->recursos = $recursos;
    }

    public function podeApagar() {
        $this->conectar();
        $query = "SELECT count(*) as total FROM showsmusicas WHERE id_musica=" . $this->id . ";";
        $result = $this->query($query);
        $this->desconectar();

        //return (count($this->recursos)==0 AND $result[0]["total"]==0);
        if (count($this->recursos) == 0 AND $result[0]["total"] == 0) {
            return true;
        } else {
            return false;
        }
    }

}
?>

