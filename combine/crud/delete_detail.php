<?php
require_once "../config.php";
$sql = "DELETE FROM persons WHERE id = ?";
if ($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    //set parameter

    $param_id = $_GET["id"];
    if (mysqli_stmt_execute($stmt)) {
        header("location: retrieve_to.php");
    }
}
?>