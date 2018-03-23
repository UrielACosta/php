<?php
/**
    Cadastrar Usuario
**/
$nome = $_POST['idNome'];
$email = $_POST['idEmail'];
$dataNasc = $_POST['idDataNasc'];
$telefone = $_POST['idTelefone'];
$cargo = $_POST['idCargo'];
$salario = $_POST['idSalario'];
$foto = $_POST["idFoto"];

$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "INSERT INTO usuario(nome, email, dataNasc, telefone, cargo, salario, foto)
VALUES ('$nome', '$email', '$dataNasc','$telefone','$cargo','$salario','$foto')";

if (mysqli_query($conn, $query_select)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
