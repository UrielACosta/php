<?php
//header("Access-Control-Allow-Origin: *");
$nome = $_POST['idNome'];
$email = $_POST['idEmail'];
$dataNasc = $_POST['idDataNasc'];
$telefone = $_POST['idTelefone'];
$cargo = $_POST['idCargo'];
$salario = $_POST['idSalario'];
$foto = $_POST["idFoto"];

var_dump($_GET);

exit;
  // //define o caminho 
  //   $destino = "fotos/";

  //   //armazena na variavel o novo nome
  //    $arquivo = basename($foto['name']);

  //    //concatena a variavel do caminho com o nome do arquivo 
  //  $destino = $destino . $arquivo; 

$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "INSERT INTO usuario(nome, email, dataNasc, telefone, cargo, salario, foto) VALUES ('$nome', '$email', '$dataNasc','$telefone','$cargo','$salario','$foto')";

if (mysqli_query($conn, $query_select)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>



<?php
//      //recebe os dados do formulario
//     $nick = $_POST["nick"];
//     $foto = $_FILE["foto"];

  

    
//     $arquivo = basename($foto['name']);

//    //concatena a variavel do caminho com o nome do arquivo 
//    $destino = $destino . $arquivo; 

// //testa se a funçao de upload rodar
// if(move_uploaded_file($foto['tmp_name'], $destino)) {
//     //pode colocar o sql de insert na sua tabela para gravar o caminho do arquivo alem do resto dos dados.

//     echo "O arquivo $arquivo foi enviado.";
// } else{
//     echo "Ocorreu um erro. Tente novamente";
// }

// CREATE TABLE pessoa(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(255), email VARCHAR(255),  dataNasc VARCHAR(255), telefone VARCHAR(255), cargo VARCHAR(255), salario VARCHAR(255), foto VARCHAR(255), );////////////////////