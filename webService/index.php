<?php
require_once("./Classes/classes.php");

$separa=explode("/",$_REQUEST["modulo"]);
$parametros='';
for($i=2; $i<count($separa); $i++) {
    if($i>2) {
        $parametros .= $separa[$i].",";
    }
    $parametros .= $separa[$i];
}

eval('$instancia = new ' . $separa[1] . '();');
eval('$instancia->' . $acao. '('.$parametros.');');


class Answer extends Model {
    private $id;
    private $callId;
    private $dateTime;
    private $mediaId;
    private $ranking;
    
    public function newAnswer($callId,$mediaId) {
        $this->conectar();
        $query = "INSERT INTO `appAnswers` (`id`, `callId`, `datetime`, `mediaId`) 
            VALUES (NULL, '".$callId."', current_timestamp(), '".$mediaId."');";
        
        $resultado = $this->query($query);
        $this->desconectar();        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCallId() {
        return $this->callId;
    }

    public function setCallId($callId) {
        $this->callId = $callId;
    }

    public function getDateTime() {
        return $this->dateTime;
    }

    public function setDateTime($dateTime) {
        $this->dateTime = $dateTime;
    }

    public function getMediaId() {
        return $this->mediaId;
    }

    public function setMediaId($mediaId) {
        $this->mediaId = $mediaId;
    }

    public function getRanking() {
        return $this->ranking;
    }

    public function setRanking($ranking) {
        $this->ranking = $ranking;
    }

}


?>
