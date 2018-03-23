<?php
/**
    Listar Usuario
**/
$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "SELECT * FROM perfil";

$result = mysqli_query($conn, $query_select);

$perfil = array();

while ($row = mysqli_fetch_assoc($result)) {
    $perfil[] = array('id_perfil' => $row['id_perfil'],'nome_Perfil' => $row['nome_Perfil'], 'descricao' => $row['descricao']);
}

echo json_encode($perfil);
