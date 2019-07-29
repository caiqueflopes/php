<?php
// Cabeçalho da requisição
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


// incluindo objetos
include_once '../config/conn.php';
include_once '../auth.php';
include_once '../config/section.php';

// Pegando conecão com o BD
$database = new Database();
$db = $database->getConnection();
 
// Preparando o objeto
$login = new Login($db);
 
// Setando o ID da Propriedade
$login->log_usr_EMAIL = isset($_POST['name']) ? $_POST['name'] : die();
$login->log_usr_PASSWORD = isset($_POST['passw']) ? md5($_POST['passw']) : die();
 
// Chamada da Leitura
$login->authentication();
 
if($login->log_usr_EMAIL!=null){
    $_SESSION['user']=$login->log_usr_ID;
    $_SESSION['fname']=$login->log_usr_NAME;
    $_SESSION['lname']=$login->log_usr_LNAME;
    $_SESSION['mail']=$login->log_usr_EMAIL;

}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
    // tell the user login does not exist
    echo json_encode(array("message" => "Usuário ou senha incorreta."));
}
?>