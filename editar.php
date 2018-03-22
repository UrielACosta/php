<?php
	$id = $_POST['idId'];
 	$nome = $_POST['idNome'];
	$email = $_POST['idEmail'];
	$dataNasc = $_POST['idDataNasc'];
	$telefone = $_POST['idTelefone'];
	$cargo = $_POST['idCargo'];
	$salario = $_POST['idSalario'];
	$foto = $_POST["idFoto"];
  
       
      
    $sql = "update usuario set 
            nome = '".$nome."', email = '".$email."', dataNasc = '".$dataNasc."', telefone = '".$telefone."', cargo = '".$cargo."', salario = '".$salario."',foto = '".$foto."' where idcliente = ".$id;
  
    if(mysql_query($sql,$con)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysql_close($con);   
