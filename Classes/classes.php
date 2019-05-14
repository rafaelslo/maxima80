<?php

session_start();

/**
 * Classe responsável pela camada de acesso ao banco de dados
 * 
 */
class Model {

    private $conn;

    protected function conectar() {
        //TODO: acertar conexão em produção
        if ($_SERVER["SERVER_NAME"] == "localhost") {
            $this->conn = @mysqli_connect("10.60.145.1", "root", "");
            mysqli_select_db($this->conn, "maxima80");
        } else {
            $this->conn = @mysqli_connect("mysql.hostinger.com", "u990571683_m80", "0hybOzRXM2dP");
            if (!$this->conn) {
                echo "mysql.maxima80.svc"."-".getenv("databaseusername")."-".getenv("databaseuserpassword");
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "<BR>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<BR>Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            mysqli_select_db($this->conn, "u990571683_m80");
        }
        if (!$this->conn) {
            printf("Can't connect to MySQL Server. Errorcode: %s\n", mysqli_connect_error());
            exit;
        }
        mysqli_set_charset($this->conn, 'utf8');
    }

    protected function query($query) {
        //echo "<BR>----query:" . $query;
        $resp = mysqli_query($this->conn, $query);

        if (is_bool($resp)) {
            return $resp;
        } else {
            if (mysqli_num_rows($resp) == 0) {
                $_SESSION["ERRO"] = "Consulta não retornou nenhum dado.<BR>" . $query;
                return false;
            }
            while ($row = mysqli_fetch_array($resp)) {
                //$ret = new Resultado();
                $linha = Array();
                foreach ($row as $chave => $valor) {
                    //$ret->addAtributo($chave,$valor);
                    $linha[$chave] = $valor;
                }
                $retorno[] = $linha;
            }
            return $retorno;
        }
    }

        protected function WSquery($query) {
        $resp = mysqli_query($this->conn, $query);

        if (is_bool($resp)) {
            return array('error'=>'0','query'=>$query);
        } else {
            if (mysqli_num_rows($resp) == 0) {
                return array('error'=>'1','query'=>$query);
            }
            while ($row = mysqli_fetch_assoc($resp)) {
                $linha = Array();
                foreach ($row as $chave => $valor) {
                    $linha[$chave] = $valor;
                }
                $retorno[] = $linha;
            }
            $retorno['query'] = $query;
            return $retorno;
        }
    }
    
    protected function exec($query) {
        $_SESSION["queries"].="<BR>----exec:" . $query;
        $resp = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_array($resp);
        $ret = split(chr(31), $row[0]);
        $retorno["ID"] = $ret[0];
        $retorno["MSG"] = $ret[1];
        return $retorno;
    }

    protected function desconectar() {
        mysqli_close($this->conn);
    }

}

/**
 * Classe responsável pela camada de exibição de resultados ao usuário
 *
 */
class View {

    // declaro a propriedae Smarty aqui dentro da nossa
    // view (veja que eh uma propriedade private, pois
    // somente a classe View pode acessar ela
    private $smarty;
    // Variável que define a pasta raiz dentro de template.
    // Ex: Se os templates estiverem dentro da pasta "templates/atividades", raiz será "atividades"
    private $raiz;

    public function __construct() {
        // quando entao for chamado o contrutor da
        // classe, ele instancia o objeto Smarty
        $this->smarty = new Smarty();
        $this->raiz = $this->primeiroNomeClasse();
        $this->atribuirValor("raiz", $this->raiz);
    }

    public function mostrarNaTela($template) {
        // chama o metodo do smarty pra exibir o
        // template na tela
        $template = ltrim($template, "/");
        $template = rtrim($template, "/");
        try {
            $this->smarty->display($this->raiz . "/" . $template);
        } catch (Exception $e) {
            $this->atribuirValor("erro", $this->raiz . "/" . $template);
            $this->atribuirValor("excecao", $e->getCode() . ": " . $e->getMessage());
            $this->smarty->display("falhaTemplate.tpl");
        }
    }

    public function atribuirValor($var, $valor) {
        // chama o metodo do smarty para atribuir
        // o valor a variavel
        $this->smarty->assign($var, $valor);
    }

    private function primeiroNomeClasse() {
        $nomeCompleto = get_class($this);
        return substr($nomeCompleto, 0, -4);
    }

    public function mensagemUsuario($retorno) {
        if ($retorno["MSG"] != "") {
            //erro
            $this->atribuirValor("msg_dialog", $retorno["MSG_FALHA"]);
            $this->atribuirValor("msg_dialog_bd", $retorno["MSG"]);
        } elseif ($retorno["ID"] == "") {
            // Alteração ok
            $this->atribuirValor("msg_ok", $retorno["MSG_ALTERACAO"]);
        } else {
            // Inclusao ok
            $this->atribuirValor("msg_ok", $retorno["MSG_OK"]);
        }
    }

    public function echoJsonUnique($valor) {
        if (is_null($valor) || $valor == "") {
            echo json_encode(array("unique" => true));
        } else {
            echo json_encode(array("unique" => false));
        }
    }

}

/**
 * Classe responsável pela lógica do sistema e fluxo entre o Model e a View
 *
 */
class Controller {

    /**
     * @var Model
     */
    protected $model;

    /**
     * @var view
     */
    protected $view;

    /*
     * Direciona o fluxo do sistema para a URL
     *
     * @param String $url URL para onde deverá ser desviado o sistema
     */

    public function redirect($url) {
        header('Location: ' . $url);
    }

    public function error($error) {
        // se algum erro acontecer, chamo esse metodo,
        // que vai fazer alguma coisa (mandar um email,
        // gravar log, etc )
        $this->log($error);
    }

}

?>