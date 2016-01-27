<?php

require_once("./Classes/classes.php");
require_once("./inc.funcoesExibicao.php");

class ListaShows extends Model {

    private $shows = array();

    public function carrega() {
        $this->conectar();
        $query = "SELECT * FROM shows;";
        $resultado = $this->query($query);
        $this->desconectar();

        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $show = new Show();
                $show->setId($result["id"]);
                $show->setLocal($result["local"]);
                $show->setData($result["data"]);
                $this->addShow($show);
            }
        }
    }

    public function getShows() {
        return $this->shows;
    }

    public function setShows($shows) {
        $this->shows = $shows;
    }

    public function addShow($shows) {
        $this->shows[] = $shows;
    }

}

class Show extends Model {

    private $id;
    private $local;
    private $data;
    private $bloco1 = array();
    private $bloco2 = array();
    private $bis = array();

    /**
     * 
     * @param String $cpf CPF do usuario a ser carregado
     */
    public function carrega($id) {
        $this->conectar();
        $query = "SELECT * FROM shows WHERE id=" . $id . ";";
        $result = $this->query($query);
        $this->desconectar();

        $this->setId($result[0]["id"]);
        $this->setLocal($result[0]["local"]);
        $this->setData($result[0]["data"]);
    }

    public function grava($request) {
        $this->conectar();
        $query = "INSERT INTO shows (`id` ,`local` ,`data`)
VALUES (NULL ,  '" . $request["inputLocal"] . "' ,  '" . humano_date_para_mysql($request["date"]) . "');";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function gravaSetlist($musica, $show, $bloco,$posicao) {
        if ($bloco == "4") {
            $this->conectar();
            $query = "DELETE FROM showsmusicas WHERE id_musica=" . $musica . " AND id_show=" . $show . " LIMIT 1 ;";
            $resultado = $this->query($query);
            $this->desconectar();
        } else {
            $this->conectar();
            $query = "SELECT * FROM showsmusicas WHERE id_musica=" . $musica . " AND id_show=" . $show . ";";
            $resultado = $this->query($query);
            $this->desconectar();
            if (is_bool($resultado)) {
                $this->conectar();
                $query = "INSERT INTO showsmusicas  (`id_musica` ,`id_show` ,`bloco` ,`posicao`) VALUES ('" . $musica . "',  '" . $show . "',  '" . $bloco . "',  '" . $posicao . "' );";
                $resultado = $this->query($query);
            } else {
                $this->conectar();
                $query = "UPDATE  showsmusicas SET  `bloco` =  '" . $bloco . "',`posicao` =  '" . $posicao . "' WHERE  `id_musica` =" . $musica . " AND  `id_show` =" . $show . " LIMIT 1 ;";
                echo "<BR>".$query;
                $resultado = $this->query($query);
                $query = "UPDATE  showsmusicas SET  posicao =  posicao + 1 WHERE  `posicao` >=  " . $posicao . " AND `id_musica` <>" . $musica . " AND `bloco` =" . $bloco . " AND  `id_show` =" . $show . ";";
                echo "<BR>".$query;
                $resultado = $this->query($query);
            }
            $this->desconectar();
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLocal() {
        return $this->local;
    }

    public function setLocal($local) {
        $this->local = $local;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = mysql_date_para_humano($data);
    }

    public function getBloco1() {
        return $this->bloco1;
    }

    public function setBloco1($bloco1) {
        $this->bloco1 = $bloco1;
    }

    public function getBloco2() {
        return $this->bloco2;
    }

    public function setBloco2($bloco2) {
        $this->bloco2 = $bloco2;
    }

    public function getBis() {
        return $this->bis;
    }

    public function setBis($bis) {
        $this->bis = $bis;
    }

}
?>

