<?php

require_once("./Classes/classes.php");

class Votos extends Model {

    private $votos = array();

    public function carrega($id,$editavel) {
        $this->conectar();
        $query = "SELECT * FROM votos WHERE id_musica=" . $id . ";";
        $resultado = $this->query($query);
        $this->desconectar();

        $this->votos = Array("-", "-", "-", "-", "-");
        $this->votos[$_SESSION["m80Usuario"] - 1] = selVoto("4", $_SESSION["m80Usuario"],$id,$editavel);

        if (!is_bool($resultado)) {
            foreach ($resultado as $result) {
                $this->votos[$result["id_integrante"] - 1] = selVoto($result["voto"], $result["id_integrante"],$id,$editavel);
            }
        }
    }

    public function getVotos() {
        return $this->votos;
    }

    public function setVotos($votos) {
        $this->votos = $votos;
    }
    
    public function processaVoto($musica,$integrante,$voto) {
        $this->conectar();
        $query = "SELECT * FROM votos WHERE id_musica=" . $musica . " AND id_integrante=" . $integrante . ";";
        $resultado = $this->query($query);
        $this->desconectar();
        if(is_bool($resultado)) {
            $this->conectar();
            $query = "INSERT INTO votos  (`id_musica` ,`id_integrante` ,`voto`) VALUES ('" . $musica . "',  '" . $integrante . "',  '" . $voto . "' );";
            $resultado = $this->query($query);
        } else {
            $this->conectar();
            $query = "UPDATE  votos SET  `voto` =  '" . $voto . "' WHERE  `id_musica` =" . $musica . " AND  `id_integrante` =" . $integrante . " LIMIT 1 ;";
            $resultado = $this->query($query);
        }
        $this->desconectar();
        return "Processado";
    }

}

function selVoto($voto, $integrante,$musica,$editavel) {
    $tipos = Array("4"=>"", "1" => "Sim", "2" => "Não", "3" => "Talvez");
    if ($_SESSION["m80Usuario"] == $integrante AND $editavel) {
        $retorna="<select class='form-control' id='inputVoto_".$musica."_".$integrante."' name='inputVoto_".$musica."_".$integrante."'>";
        foreach($tipos as $chave=>$valor){
            if($voto==$chave) {
                $retorna.="<option selected value='".$chave."'>".$valor."</option>";
            } else {
                $retorna.="<option value='".$chave."'>".$valor."</option>";
            }
        }
        $retorna.="</select>";
        return $retorna;
    } else {
        return $tipos[$voto];
    }
}
?>

