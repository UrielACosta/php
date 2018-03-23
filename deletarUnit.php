<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
    	$conn = mysqli_connect("localhost", "root", "", "Banco");
    	$query_select = "SELECT * FROM usuario";
	$result = mysqli_query($conn, $query_select);
	$usuarios = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'dataNasc' => $row['dataNasc'], 'telefone' => $row['telefone'], 'cargo' => $row['cargo'], 'salario' => $row['salario'], 'foto' => $row['foto']);         
	}

        $this->assertGreaterThan(40, count($usuarios));
    }
}