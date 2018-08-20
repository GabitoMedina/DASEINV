<?php

require_once __DIR__ . "/../init.php";

include_once SITE_ROOT . '/MVC/Model/ColaboradorDaoImp.php';
include_once SITE_ROOT . '/MVC/Controller/JsonMapper.php';

$accion = $_POST["accion"];
$op = $_POST["op"];
$mapper = new JsonMapper();
$resultado = "";

switch ($accion) {
    case "list":
        $params = array(
            "top" => (isset($_POST["limit"])) ? $_POST["limit"] : 0,
            "pag" => (isset($_POST["offset"])) ? $_POST["offset"] : 0,
            "buscar" => (isset($_POST["search"])) ? $_POST["search"] : NULL
        );
        //$top = (isset($_POST["limit"])) ? $_POST["limit"] : 0;
        //$pag = (isset($_POST["offset"])) ? $_POST["offset"] : 0;
        $count = 0;
        switch ($op) {
            case "cliente":
                $resultado = json_encode(array(
                    "rows" => ColaboradorDaoImp::_list($params, $count),
                    "total" => $count
                ));
                break;
        }
        break;
    case "save":
        if (array_key_exists("datos", $_POST)) {
            $json = json_decode($_POST["datos"]);
        }

        switch ($op) {
            case "cliente":
                $Colaborador = $mapper->map($json, new Colaborador());
                ColaboradorDaoImp::save($Colaborador);
                $resultado = json_encode(array(
                    "status" => TRUE,
                    "Mensaje" => "Registrado Correctamente"
                ));
                break;
        }
        break;
    case "get":
        $resultado = json_encode(ColaboradorDaoImp::get($_POST["idColaborador"]));
        break;
    case "delete":
        switch ($op) {
            case "colaborador":
                $Colaborador = new Colaborador();
                $Colaborador->Id =  $_POST["ids"];
                ColaboradorDaoImp::delete($Colaborador);
                break;
        }
        break;
}
echo $resultado;


