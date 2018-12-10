<?php

require_once("./Classes/classes.php");

class ListaLogs extends Model {

    private $logs = array();

    public function carrega($request = array()) {
        
        if ($request["form"]=="Sim") {
        
            $query = 'SELECT A.*,B.id idIntegrante,B.nome nomeIntegrante,C.id idMusica,C.nome nomeMusica , D.nome nomeBanda
                FROM log A
                LEFT JOIN integrantes B ON A.integrante=B.id
                LEFT JOIN musicas C ON A.id_objeto=C.id
                LEFT JOIN bandas D ON D.id=C.id_banda
                WHERE true ';
            if($request["inputIntegrante"]<>0) {
                $query .= 'AND integrante='.$request["inputIntegrante"].' ';
            }
            if($request["Bandas"]<>"") {
                $query .= 'AND D.nome like "%'.$request["Bandas"].'%" ';
            }
            if($request["Musicas"]<>"") {
                $query .= 'AND C.nome like "%'.$request["Musicas"].'%" ';
            }
            if($request["dataInicial"]<>"") {
                $request["dataInicial"] = str_replace("/", "-", $request["dataInicial"]);
                $data = new DateTime($request["dataInicial"]);
                $request["dataInicial"] = $data->format('Y-m-d H:i:s');
                $query .= 'AND datahora>="'.$request["dataInicial"].'" ';            
            }
            if($request["dataFinal"]<>"") {
                $request["dataFinal"] = str_replace("/", "-", $request["dataFinal"]);
                $data = new DateTime($request["dataFinal"].' 23:59:59');
                $request["dataFinal"] = $data->format('Y-m-d H:i:s');
                $query .= 'AND datahora<="'.$request["dataFinal"].'" ';            
            }

            $this->conectar();
            $resultado = $this->query($query);
            $_REQUEST["sql"] = $query;
            $this->desconectar();
            
            if(is_array($resultado)) {
                foreach ($resultado as $result) {
                    $log = new Log();
                    $log->setId($result["id"]);
                    $data = new DateTime($result["datahora"]);
                    $log->setDatahora($data->format('d/m/Y H:i:s'));
                    $log->setIntegrante($result["nomeIntegrante"]);
                    $log->setOperacao($result["operacao"]);
                    $log->setObjeto($result["tab_objeto"]);
                    $log->setMusica($result["nomeMusica"]);
                    $log->setIdMusica($result["idMusica"]);
                    switch($result["operacao"]) {
                        case "Alteração":
                            $log->setTexto("De: '".$result["valor1"]."' - Para: '".$result["valor2"]."'");
                            break;
                        case "Inclusão":
                        case "Exclusão":
                            $log->setTexto($result["valor1"]." - ".$result["valor2"]);
                            break;
                    }
                    $this->addLog($log);
                }            
            }
        }
    }

    public function getLogs() {
        return $this->logs;
    }

    public function setLogs($logs) {
        $this->logs = $logs;
    }

    public function addLog($logs) {
        $this->logs[] = $logs;
    }

}

class Log extends Model {

    private $id;
    private $datahora;
    private $integrante;
    private $objeto;
    private $operacao;
    private $musica;
    private $idMusica;
    private $texto;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDatahora() {
        return $this->datahora;
    }

    public function setDatahora($datahora) {
        $this->datahora = $datahora;
    }

    public function getIntegrante() {
        return $this->integrante;
    }

    public function setIntegrante($integrante) {
        $this->integrante = $integrante;
    }

    public function getObjeto() {
        return $this->objeto;
    }

    public function setObjeto($objeto) {
        $this->objeto = $objeto;
    }

    public function getOperacao() {
        return $this->operacao;
    }

    public function setOperacao($operacao) {
        $this->operacao = $operacao;
    }

    public function getMusica() {
        return $this->musica;
    }

    public function setMusica($musica) {
        $this->musica = $musica;
    }

    public function getIdMusica() {
        return $this->idMusica;
    }

    public function setIdMusica($idMusica) {
        $this->idMusica = $idMusica;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }   
}
?>

