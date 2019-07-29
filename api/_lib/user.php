<?php
class User{
 
    // Conexão com o BD
    private $conn;
    private $table_name = "usuarios";
 
    // Propriedades do objeto
   
    public $usr_NAME;
    public $usr_LNAME;
    public $usr_EMAIL;
	public $usr_STREET;
	public $usr_NUMBER;
	public $usr_PHONE;
	public $usr_PASSWORD;

 
    // Construtor bd
    public function __construct($db){
        $this->conn = $db;
    }
	// Lendo produtos
	
	function read()
	{
		$query = "SELECT usr.usr_NAME, 
					usr.usr_LNAME,
					usr.usr_EMAIL,
					usr.usr_STREET,
					usr.usr_NUMBER,
					usr.usr_PHONE,
					usr.usr_PASSWORD
					FROM " . $this->table_name . " usr";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	
	// CRIAÇÃO DE USUARIOS
	function create()
	{
		// $verify="SELECT usr.usr_EMAIL FROM". $this->table_name ."usr WHERE usr.usr_EMAIL=':mail'";
		// $retverif = $this->conn->prepare($verify);
		// $retverif->execute();
		// if(isset($retverif)){
		// 	echo '"message": "Agenda não atualizada."';
		// }else{
		// Query para inserir
		$query = "INSERT INTO
					" . $this->table_name . "
				SET
                usr_NAME=:name, 
                usr_LNAME=:lname, 
                usr_EMAIL=:mail, 
                usr_STREET=:street, 
                usr_NUMBER=:number, 
                usr_PHONE=:phone, 
                usr_PASSWORD=:passw";
	 
		
		$stmt = $this->conn->prepare($query);
		$this->usr_NAME=htmlspecialchars(strip_tags($this->usr_NAME));
		$this->usr_LNAME=htmlspecialchars(strip_tags($this->usr_LNAME));
		$this->usr_EMAIL=htmlspecialchars(strip_tags($this->usr_EMAIL));
		$this->usr_STREET=htmlspecialchars(strip_tags($this->usr_STREET));
		$this->usr_NUMBER=htmlspecialchars(strip_tags($this->usr_NUMBER));
		$this->usr_PHONE=htmlspecialchars(strip_tags($this->usr_PHONE));
		$this->usr_PASSWORD=htmlspecialchars(strip_tags($this->usr_PASSWORD));
		
		// bind valores
		$stmt->bindParam(":name", $this->usr_NAME);
		$stmt->bindParam(":lname", $this->usr_LNAME);
		$stmt->bindParam(":mail", $this->usr_EMAIL);
		$stmt->bindParam(":street", $this->usr_STREET);
		$stmt->bindParam(":number", $this->usr_NUMBER);
		$stmt->bindParam(":phone", $this->usr_PHONE);
		$stmt->bindParam(":passw", $this->usr_PASSWORD);
		
		//Executa a query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
		
	}
	
	// UPDATE AGENDA
	function update()
	{
	 
		$query = "UPDATE
					" . $this->table_name . "
				SET
                usr_NAME=:name,
                usr_LNAME=:lname,
                usr_EMAIL=:mail,
                usr_STREET=:street,
                usr_NUMBER=:number,
                usr_PHONE=:phone,
                usr_PASSWORD=:passw,
				WHERE
                usr_ID = :id";
	 
		// Preparando a query
		$stmt = $this->conn->prepare($query);
	 
		
		$this->usr_NAME=htmlspecialchars(strip_tags($this->usr_NAME));
		$this->usr_LNAME=htmlspecialchars(strip_tags($this->usr_LNAME));
		$this->usr_EMAIL=htmlspecialchars(strip_tags($this->usr_EMAIL));
		$this->usr_STREET=htmlspecialchars(strip_tags($this->usr_STREET));
		$this->usr_NUMBER=htmlspecialchars(strip_tags($this->usr_NUMBER));
		$this->usr_PHONE=htmlspecialchars(strip_tags($this->usr_PHONE));
		$this->usr_PASSWORD=htmlspecialchars(strip_tags($this->usr_PASSWORD));
		
		// bind novos valores
		$stmt->bindParam(':name', $this->usr_NAME);
		$stmt->bindParam(':lname', $this->usr_LNAME);
		$stmt->bindParam(':mail', $this->usr_EMAIL);
		$stmt->bindParam(':street', $this->usr_STREET);
		$stmt->bindParam(':number', $this->usr_NUMBER);
		$stmt->bindParam(':phone', $this->usr_PHONE);
		$stmt->bindParam(':passw', $this->usr_PASSWORD);
		
	 
		// Executando a Query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
    }
    
	// DELETE Logico
	function delete()
	{
	 
		$query = "UPDATE
					" . $this->table_name . "
				SET
                usr_STATUS=0
				WHERE
                usr_ID = :id";
	 
		// Preparando a query
		$stmt = $this->conn->prepare($query);
	 
		
		$this->usr_STATUS=htmlspecialchars(strip_tags($this->usr_STATUS));
		$stmt->bindParam(0, $this->usr_STATUS);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	
}?>