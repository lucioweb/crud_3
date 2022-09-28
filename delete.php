<?php
include "db_conn.php";

if (isset($_GET['deleteid'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `crud_2` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: data_table.php?msg=Registro excluído com sucesso da base de dados!");
    } else {
        die(mysqli_error($conn));
    }
}
?>