<?php
$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "SELECT * FROM perfil where id_perfil = '$id'";

$result = mysqli_query($conn, $query_select);

$usuarios = array();

while ($row = mysqli_fetch_assoc($result)) {
    $usuarios[] = array('id_perfil' => $row['id_perfil'],'nome_Perfil' => $row['nome_Perfil'], 'descricao' => $row['descricao']);
}

mysqli_close($conn);

echo json_encode($usuarios);
