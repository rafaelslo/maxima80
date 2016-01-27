<?php

require_once("./Classes/classes.php");
require_once("./inc.funcoesExibicao.php");

class musicasShows extends Model {

    private $musicas = array();

    public function carrega($show, $bloco) {
        $this->conectar();
        $query = "SELECT * FROM showsmusicas WHERE id_show=" . $show . " AND bloco=" . $bloco . ";";
        $resultado = $this->query($query);
        $this->desconectar();

        unset($his->musicas);
        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $his->musicas[] = $result["id_musica"];
            }
        }
    }

    public function getMusicas() {
        return $this->musicas;
    }

    public function setMusicas($musicas) {
        $this->musicas = $musicas;
    }

}
?>

