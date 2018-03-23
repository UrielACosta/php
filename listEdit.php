<?php

$id = $_GET['id'];


$conn = mysqli_connect("localhost", "root", "", "Banco");

    $query_select = "SELECT * FROM usuario where id = '$id'";
    $result = mysqli_query($conn, $query_select);
    $usuarios = array();


    while ($row = mysqli_fetch_assoc($result)) {

        $usuarios[] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'dataNasc' => $row['dataNasc'], 'telefone' => $row['telefone'], 'cargo' => $row['cargo'], 'salario' => $row['salario'], 'foto' => $row['foto']);         
    }

     mysqli_close($conn);

     echo json_encode($usuarios);