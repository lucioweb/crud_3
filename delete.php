<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crud_2` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: new_data_table.php?msg=Registro excluído com sucesso da base de dados!");
    } else {
        die(mysqli_error($conn));
    }
}
?>