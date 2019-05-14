<?php

require_once("./Classes/classes.php");
require_once("./inc.funcoesExibicao.php");

class ListaShows extends Model {

    private $shows = array();

    public function carrega() {
        $this->conectar();
        $query = "SELECT * FROM shows ORDER BY data DESC;";
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
    
    public function carregaOcorrencias($idMusica) {
        $this->conectar();
        $query = "SELECT B.id, B.local, B.data
            FROM showsmusicas A 
            LEFT JOIN shows B on A.id_show=B.id
            WHERE id_musica=" . $idMusica . "
            ORDER BY data DESC;";
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
        $query = "INSERT INTO shows (`id` ,`local` ,`data`) VALUES (NULL ,  '" . $request["inputLocal"] . "' ,  '" . humano_date_para_mysql($request["date"]) . "');";
        $result = $this->query($query);
        $this->desconectar();
    }

    public function gravaSetlist($show, $blocoantigo, $bloconovo, $musica, $posicaoinicial, $posicaofinal) {
        if ($bloconovo == "4") { //movimentação para a lista de músicas prontas, ie,retirada do show
            $this->conectar();
            //retira do setlist
            $query = "DELETE FROM showsmusicas WHERE id_musica=" . $musica . " AND id_show=" . $show . " LIMIT 1 ;";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            //atualiza a lista de origem
            $query = "UPDATE  showsmusicas SET  posicao =  posicao - 1 WHERE  `posicao` >  " . $posicaoinicial . " AND `bloco` =" . $blocoantigo . " AND  `id_show` =" . $show . ";";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            $this->desconectar();
        } elseif ($bloconovo == $blocoantigo) { //mudanças dentro do mesmo bloco
            $this->conectar();
            if ($posicaofinal > $posicaoinicial) {
                $query = "call setOrderSameBlockUp(" . $show . "," . $bloconovo . "," . $musica . "," . $posicaofinal . ");";
                echo "<BR>" . $query;
                $resultado = $this->query($query);
            } else {
                $query = "call setOrderSameBlockDown(" . $show . "," . $bloconovo . "," . $musica . "," . $posicaofinal . ");";
                echo "<BR>" . $query;
                $resultado = $this->query($query);
            }
            $this->desconectar();
        } elseif ($blocoantigo == "4") { //origem da lista de músicas prontas, ie, entrando no show
            $this->conectar();
            $query = "INSERT INTO showsmusicas  (`id_musica` ,`id_show` ,`bloco` ,`posicao`) VALUES ('" . $musica . "',  '" . $show . "',  '" . $bloconovo . "',  '" . $posicaofinal . "' );";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            $query = "UPDATE  showsmusicas SET  posicao =  posicao + 1 WHERE  `posicao` >=  " . $posicaofinal . " AND `id_musica` <>" . $musica . " AND `bloco` =" . $bloconovo . " AND  `id_show` =" . $show . ";";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            $this->desconectar();
        } else { //mudanças entre blocos diferentes
            $this->conectar();
            //Atualiza a musica, trocando o bloco
            $query = "UPDATE  showsmusicas SET  bloco =  " . $bloconovo . ", posicao =  " . $posicaofinal . " WHERE `id_show` =" . $show . " AND `id_musica` = " . $musica . ";";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            //bloco de origem
            $query = "UPDATE  showsmusicas SET  posicao =  posicao - 1 WHERE  `posicao` >  " . $posicaoinicial . " AND `bloco` =" . $blocoantigo . " AND  `id_show` =" . $show . ";";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            //bloco de destino
            $query = "call setOrderNewBlock(" . $show . "," . $bloconovo . "," . $musica . "," . $posicaofinal . ");";
            echo "<BR>" . $query;
            $resultado = $this->query($query);
            $this->desconectar();
        }
    }

    public function atualizaSetlist($request) {
        $show = $this->getId();
        
        //Limpa o setlist
        $this->conectar();
        $query = "DELETE FROM showsmusicas WHERE id_show=" . $show . ";";
        //echo "<BR>" . $query;
        $resultado = $this->query($query);

        //Carrega o bloco 1, na ordem
        $bloco1 = explode("#", $request["srtb1"]);
        if ($bloco1[0] != "") {
            $cont = 1;
            foreach ($bloco1 as $musica) {
                $query = "INSERT INTO showsmusicas  (`id_musica` ,`id_show` ,`bloco` ,`posicao`) VALUES ('" . $musica . "',  '" . $show . "',  '1',  '" . $cont . "' );";
                //echo "<BR>" . $query;
                $resultado = $this->query($query);
                $cont++;
            }
        }
        //Carrega o bloco 2, na ordem
        $bloco2 = explode("#", $request["srtb2"]);
        if ($bloco2[0] != "") {
            $cont = 1;
            foreach ($bloco2 as $musica) {
                $query = "INSERT INTO showsmusicas  (`id_musica` ,`id_show` ,`bloco` ,`posicao`) VALUES ('" . $musica . "',  '" . $show . "',  '2',  '" . $cont . "' );";
                //echo "<BR>" . $query;
                $resultado = $this->query($query);
                $cont++;
            }
        }
        //Carrega o bloco 3, na ordem
        $bloco3 = explode("#", $request["srtb3"]);
        if ($bloco3[0] != "") {
            $cont = 1;
            foreach ($bloco3 as $musica) {
                $query = "INSERT INTO showsmusicas  (`id_musica` ,`id_show` ,`bloco` ,`posicao`) VALUES ('" . $musica . "',  '" . $show . "',  '3',  '" . $cont . "' );";
                //echo "<BR>" . $query;
                $resultado = $this->query($query);
                $cont++;
            }
        }
        $this->desconectar();
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

