<?php
$id = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "Banco");

$query_select = "DELETE FROM perfil WHERE id_perfil = $id";

if (mysqli_query($conn, $query_select)) {
    echo "New record delet successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
