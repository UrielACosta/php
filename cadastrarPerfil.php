<?php
/**
    Cadastrar Usuario
**/

$idPerfil = $_POST['idPerfil'];
$idDesc = $_POST['idDesc'];



$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "INSERT INTO perfil(nome_Perfil, descricao)
VALUES ('$idPerfil','$idDesc')";

if (mysqli_query($conn, $query_select)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


// SELECT u.nome, u.email, u.dataNasc, u.telefone, u.cargo, u.salario, p.nome_Perfil, p.descricao FROM usuario u INNER JOIN perfil p ON u.id_perfil = p.id_perfil;
