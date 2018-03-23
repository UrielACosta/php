<?php

$id = $_POST['id'];
$nome = $_POST['idNome'];
$email = $_POST['idEmail'];
$dataNasc = $_POST['idDataNasc'];
$telefone = $_POST['idTelefone'];
$cargo = $_POST['idCargo'];
$salario = $_POST['idSalario'];
$foto = $_POST["idFoto"];






    $conn = mysqli_connect("localhost", "root", "", "Banco");
    $query_select = "UPDATE usuario set nome ='$nome', email = '$email', dataNasc = '$dataNasc', telefone = '$telefone', cargo = '$cargo', salario = '$salario', foto = '$foto' where id = '$id'";

    if (mysqli_query($conn, $query_select)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


