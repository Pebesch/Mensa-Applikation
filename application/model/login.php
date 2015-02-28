<?php
session_start();
$username = strip_tags(filter_input(INPUT_POST, "username"));
$password = strip_tags(filter_input(INPUT_POST, "passwort"));
$error = "";

if (isset($_POST['login'])) {
    if (empty($username) || empty($password)) {
        $error = "Bitte Benutzername und Passwort eingeben.";
    } else {
        login($username, $password);
    }
}

function login($username, $passwort) {
    global $pdo;
    $sql = "SELECT *  FROM `personen` WHERE `username` = ? and `passwort` = ? ";
    $result = $pdo->prepare($sql);
    $result->bindParam(1, $username);
    $result->bindParam(2, md5($passwort . "QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo"));
    $result->execute();

    $num = $result->fetchColumn();
    if ($num > 0) {
        $_SESSION['logged'] = true;
        header("location:application/view/overview.php");
    } else {
        return $error = "Ung&uuml;ltige Kombination von Benutzername und Passwort.";
    }
}
