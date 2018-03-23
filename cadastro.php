<?php
/**
    Cadastrar Usuario
**/
// require_once("image-uploader/src/ImageUploader.php");

// $imageUploader = new ImageUploader();

// $imageUploader->setPath("imagens");

// $imageUploader->upload($_FILES["fileimagem"], "idFoto");

// $imageUploader->serve("idFoto");

// $result = $imageUploader->exists("idFoto");

$id_perfil = $_POST['idPerfil'];
$nome = $_POST['idNome'];
$email = $_POST['idEmail'];
$dataNasc = $_POST['idDataNasc'];
$telefone = $_POST['idTelefone'];
$cargo = $_POST['idCargo'];
$salario = $_POST['idSalario'];



$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "INSERT INTO usuario(id_perfil, nome, email, dataNasc, telefone, cargo, salario)
VALUES ('$id_perfil','$nome', '$email', '$dataNasc','$telefone','$cargo','$salario')";

if (mysqli_query($conn, $query_select)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
