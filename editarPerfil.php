<?php
$id = $_POST['id_perfil'];
$nome_Perfil = $_POST['idNomePerfilEdit'];
$descricao = $_POST['idPerfilDescEdit'];

    
//vir com mais uma variavel aqui para poder editar minha role do usuario

$conn = mysqli_connect("localhost", "root", "", "Banco");


$query_select = "UPDATE perfil set nome_Perfil ='$nome_Perfil', descricao = '$descricao' where id_perfil = '$id'";

if (mysqli_query($conn, $query_select)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
