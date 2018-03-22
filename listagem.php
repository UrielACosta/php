<?php

$id = $_POST['idId'];
$nome = $_POST['idNome'];
$email = $_POST['idEmail'];
$dataNasc = $_POST['idDataNasc'];
$telefone = $_POST['idTelefone'];
$cargo = $_POST['idCargo'];
$salario = $_POST['idSalario'];
$foto = $_POST["idFoto"];
$conn = mysqli_connect("localhost", "root", "", "Banco");


if ($id == '')
    {
	

	$query_select = "SELECT * FROM usuario";
	$result = mysqli_query($conn, $query_select);
	$usuarios = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'dataNasc' => $row['dataNasc'], 'telefone' => $row['telefone'], 'cargo' => $row['cargo'], 'salario' => $row['salario'], 'foto' => $row['foto']);         
	}


	echo json_encode($usuarios);
} 
else
{

	$sql = "update usuario set 
	nome = '".$nome."', email = '".$email."', dataNasc = '".$dataNasc."', telefone = '".$telefone."', cargo = '".$cargo."', salario = '".$salario."',foto = '".$foto."' where idcliente = ".$id;

	if(mysql_query($sql,$con)){
		$msg = "Atualizado com sucesso!";
	}else{
		$msg = "Erro ao atualizar!";
	}
	mysql_close($con);   

}




