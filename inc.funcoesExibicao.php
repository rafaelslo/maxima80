<?php

/**
 * Converte formato DATE do humano para o MySQL
 * 30/12/2003 ->  2003-12-30
 * @access public
 * @param String $dt A data a ser convertida
 * @return String $data A data convertida
 */
function humano_date_para_mysql($dt) {
    $datatrans = explode('/', $dt);
    $data = "$datatrans[2]-$datatrans[1]-$datatrans[0]"; // era 2 1 0
    return $data;
}

/**
 * Converte formato DATE do MySQL para o humano
 * 2003-12-30 -> 30/12/2003 
 * @access public
 * @param String $dt A data a ser convertida
 * @return String $data A data convertida
 */
function mysql_date_para_humano($dt) {
    if ($dt == "0000-00-00")
        return "&nbsp;";
    $datatrans = explode('-', $dt);
    $data = "$datatrans[2]/$datatrans[1]/$datatrans[0]"; // era 2 1 0 
    if ($data == "//")
        $data = "";
    return $data;
}

?>