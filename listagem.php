<?php
/**
    Listar Usuario
**/
$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "SELECT u.id, u.nome, u.email, u.dataNasc, u.telefone, u.cargo, u.salario, u.foto, p.nome_Perfil, p.descricao FROM usuario u INNER JOIN perfil p ON u.id_perfil = p.id_perfil";


// SELECT * FROM usuario LEFT JOIN perfil ON usuario.id_perfil = perfil.id_perfil

// UNION 

// SELECT * FROM usuario RIGHT JOIN perfil ON usuario.id_perfil = perfil.id_perfil;




$result = mysqli_query($conn, $query_select);

$usuarios = array();

while ($row = mysqli_fetch_assoc($result)) {
    $usuarios[] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'dataNasc' => $row['dataNasc'], 'telefone' => $row['telefone'], 'cargo' => $row['cargo'], 'salario' => $row['salario'], 'foto' => $row['foto'], 'nome_Perfil' => $row['nome_Perfil'], 'descricao' => $row['descricao']);
}

echo json_encode($usuarios);
