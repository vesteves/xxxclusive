<?php

if ((isset($_SESSION["email"]) == true)) {
    session_destroy();
}
if ((isset($_POST["email"]) == true)) {
    require_once '../model/conn.php';
    $email = $_POST["email"];
    $consulta = "SELECT * FROM pessoas WHERE email = '$email'";
    $result = mysql_query($consulta);
    if (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        session_start();
        $_SESSION["email"] = $row["email"];
        $_SESSION["nome"] = $row["nome"];
        mysql_close();
        header('location:../index.php');
    } else {
        $msg = base64_encode("Email não encontrado.");
        header("location:../login.php?m=" . $msg);
    }
} else {
    session_start();
    unset($_SESSION["nome"]);
    unset($_SESSION["email"]);
    session_destroy();
    header('location:../index.php');
}
?>
