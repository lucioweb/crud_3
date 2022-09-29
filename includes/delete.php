<?php
include 'connect.php';
$id = $_GET['id'];
$sql= "DELETE FROM `crud_2` WHERE id = $id";
$result =mysqli_query($conn, $sql);
if ($result) {
    header("Location: new_data_table.php?msg=Registro excluído com sucesso da base de dados!");
}
else {
    echo "Falhou! " . mysqli_error($conn);       
}

?>