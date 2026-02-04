<?php
    include "bases.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM patient WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    header("Location:afficher.php");
?>