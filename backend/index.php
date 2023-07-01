<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    switch($_GET["titulo"]){
        case "userFindAll":
            require_once("controller/UserController.php");
            $user = new UserController();
            $user->findAll();
            break;
        default:
            $response = array("error" => "nor found");
            http_response_code(404);
            echo json_encode($response);
            break;
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $data = file_get_contents("php://input");
    $obj = json_decode($data);   

        switch($obj->titulo){
            case 'usercrear':
                require_once('controller/UserController.php');
                $user = new UserController();
                $user->create($obj);
        }
}

if($_SERVER["REQUEST_METHOD"] == "DELETE")
{

}

if($_SERVER["REQUEST_METHOD"] == "PATCH")
{

}

?>