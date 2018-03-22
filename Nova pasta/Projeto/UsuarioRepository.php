<?php

$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "INSERT INTO pessoa(nome, email, dataNasc, telefone) VALUES ('$nome', '$email', '$dataNasc','$telefone')";

if (mysqli_query($conn, $query_select)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);



?>



<?php

$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "SELECT * FROM pessoa";
$result = mysqli_query($conn, $query_select);
$usuarios = array();

while ($row = mysqli_fetch_assoc($result)) {
    $usuarios[] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'dataNasc' => $row['dataNasc'], 'telefone' => $row['telefone']);         
}


echo json_encode($usuarios);



class ProdutoDAO 
{
    private $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function add(Produto $produto) 
    {
        

        $query = "INSERT INTO produtos (nome, descricao, preco) VALUES(?,?,?)"; 
        $stmt = mysqli_prepare($this->db->getConection(), $query);
        mysqli_stmt_bind_param($stmt,'sss', $nome, $descricao, $preco);
        mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);
    }

}

?>


