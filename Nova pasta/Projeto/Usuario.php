<?php



class Usuario
{
    private $nome;
    private $email;
    private $telefone;
    private $dataNasc;
    private $cargo;
    private $salario;
    private $file;

    public function list()
    {
        

        $conn = mysqli_connect("localhost", "root", "", "Banco");

        $query_select = "SELECT * FROM usuario";
        $result = mysqli_query($conn, $query_select);
        $usuarios = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $usuarios[] = array('id' => $row['id'],'nome' => $row['nome'], 'email' => $row['email'], 'dataNasc' => $row['dataNasc'], 'telefone' => $row['telefone'], 'cargo' => $row['cargo'], 'salario' => $row['salario'], 'foto' => $row['foto']);         
        }

        return $usuarios;
    }


}
