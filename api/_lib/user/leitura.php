<?php

 
// Inclui as paginas de con_bd e agenda
include_once '../config/conn.php';
include_once 'agenda.php';
 
// Instancia bd  e agenda
$database = new Database();
$db = $database->getConnection();
 

$agenda = new Agenda($db);
 
// Requisição
$stmt = $agenda->read();
$num = $stmt->rowCount();
 
// Verifica se foi encontrado mais de 0 dados
	if($num>0)
	{
		// Array
		$agenda_arr=array();
		
	 
		// fetch() é mais rapido que fetchAll()
		
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			
			extract($row);
	 
			$agenda_item=array(
				"agd_DESCRICAO" => $agd_DESCRICAO,
				"pri_NOME" =>$pri_NOME,
				"agd_POSICAO" => $agd_POSICAO,
				"agd_DATA" => $agd_DATA,
				
			);
	 
			array_push($agenda_arr, $agenda_item);
		}
		
		$result= json_encode($agenda_arr);
	}
 
else{
    $msg=  json_encode(
        array("message" => "Nenum compromisso encontrado.")
    );
}
?>