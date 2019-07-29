<?php
class Date{
 
    // Conexão com o BD
    private $conn;
    private $table_name = "calendario";
 
    // Propriedades do objeto
   
    public $cal_usr_ID;
    public $cal_NOME;
	public $cal_DATE;
	public $cal_sta_ID;
	
    // Construtor bd
    public function __construct($db){
        $this->conn = $db;
    }
	// Lendo produtos
	
	function read()
	{
 
		// SELECT QUERY
		$query = "SELECT usu.usr_NAME, 
					usu.usr_LNAME, 
					cal.cal_NOME, 
					cal.cal_DATE, 
					sta.sta_NOME 
                    FROM ".$this->table_name." cal 
                    INNER JOIN usuarios usu on cal.cal_usr_ID=usu.usr_ID
                    INNER JOIN status sta on cal.cal_sta_ID=sta.sta_ID";
	 
		// Preparando a QUERY
		$stmt = $this->conn->prepare($query);
	 
		// Executando a QUERY
		$stmt->execute();
	 
		return $stmt;
	}
	
	// CRIAÇÃO DE PRODUTOS
	function create()
	{
		// Query para inserir
		$query = "INSERT INTO
					" . $this->table_name . "
				SET
				cal_usr_ID=:user_id, 
				cal_NOME=:nome, 
				cal_DATE=:data";
	 
		// Preparando a Query
		$stmt = $this->conn->prepare($query);
	 	
		$this->cal_usr_ID=htmlspecialchars(strip_tags($this->cal_usr_ID));
		$this->cal_NOME=htmlspecialchars(strip_tags($this->cal_NOME));
		$this->cal_DATE=htmlspecialchars(strip_tags($this->cal_DATE));
		
	 
		// bind valores
		$stmt->bindParam(":user_id", $this->cal_usr_ID);
		$stmt->bindParam(":nome", $this->cal_NOME);
		$stmt->bindParam(":data", $this->cal_DATE);
		
	 
		//Executa a query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
		 
	}
	
	// UPDATE AGENDA
	function update()
	{
	 
		// update query
		$query = "UPDATE
					" . $this->table_name . "
				SET
                  cal_NOME=:datename,
                  cal_DATE=:date,
                  cal_sta_ID=:status
				WHERE
                  cal_ID = :id";
	 
		// Preparando a query
		$stmt = $this->conn->prepare($query);
	 
		
		$this->datename=htmlspecialchars(strip_tags($this->datename));
		$this->date=htmlspecialchars(strip_tags($this->date));
		$this->status=htmlspecialchars(strip_tags($this->status));
		
	 
		// bind novos valores
		$stmt->bindParam(':datename', $this->datename);
		$stmt->bindParam(':date', $this->date);
		$stmt->bindParam(':status', $this->status);
	 
		// Executando a Query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	// DELETE Compromisso
	function delete()
	{
	 
		// Delete Query
		$query = "DELETE FROM " . $this->table_name . " WHERE id =".$this->id."";
	 
		// Preparando a query
		$stmt = $this->conn->prepare($query);
	 
		$this->id=htmlspecialchars(strip_tags($this->id));
	 
		// bind id gravado
		$stmt->bindParam(':id', $this->id);
	 
		// Executa query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	
}?>