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
    $sql = "SELECT passwort FROM personen WHERE username = ?";
    $result = $pdo->prepare($sql);
    $result->bindParam(1, $username);
    $result->execute();
    $hash = $result->fetchColumn();

    if ($hash && password_verify($passwort, $hash)) {
        $_SESSION['logged'] = true;
        header("location:application/view/overview.php");
    } else {
        return $error = "Ung&uuml;ltige Kombination von Benutzername und Passwort.";
    }
}
