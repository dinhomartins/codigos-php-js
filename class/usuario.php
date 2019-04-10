<?php 

class Usuario {

	private $valor;
	private $data;
	private $descricao;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getValor()
	{
	    return $this->valor;
	}
	
	public function setValor($valor)
	{
	    return $this->valor = $valor;
	}

	public function getData()
	{
	    return $this->data;
	}
	
	public function setData($data)
	{
	    return $this->data = $data;
	}

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    return $this->descricao = $descricao;
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM entradas WHERE  id = :ID", array(":ID"=>$id));

		if(count($results) > 0) {

			$row = $results[0];

			$this->setId($row['id']);
			$this->setId($row['data']);
			$this->setId($row['descricao']);
		}
	}

	public function __toString(){

		return json_encode(array(
			"id"=>$this->getId(),
			"data"=>$this->getData(),
			"descricao"=>$this->getDescricao()
		));
	}
	
}

 ?>