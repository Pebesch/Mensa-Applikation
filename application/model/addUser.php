<?php

$username = strip_tags(filter_input(INPUT_POST, "user"));
$mail = strip_tags(filter_input(INPUT_POST, "mail"));
$password = strip_tags(filter_input(INPUT_POST, "pw"));
$wiederholung = strip_tags(filter_input(INPUT_POST, "pwwd"));
$salt = "QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo"; // legacy salt, not used with password_hash

if (isset($_POST['add'])) {
    //notEmpty($username, $salt, $mail, $password, $wiederholung);
}

function notEmpty($username, $salt, $mail, $password, $wiederholung) {
    if (empty($username) || empty($mail) || empty($password) || empty($wiederholung)) {
        return "Alle Felder m&uuml;ssen ausgef&uuml;llt werden.";
    } else if($password != $wiederholung){
        return "Passwort stimm nicht &uuml;berein.";
    } else {
        fillIn($username, $mail, $salt, $password);
    }
}

//function checkPW($username, $salt, $mail, $password, $wiederholung) {
//    if (!empty($password)) {
//        if ($password != $wiederholung) {
//            return "Eingabe stimmt nicht &uuml;berein.";
//        } else {
//            fillIn($username, $mail, $salt, $password);
//            return null;
//        }
//    } else {
//        return "Alle Felder ausf&uuml;llen.";
//    }
//}

function fillIn($username, $mail, $salt, $password) {
    global $pdo;
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = $pdo->prepare('INSERT INTO personen(username, salt, passwort, mail) VALUE (?,?,?,?)');
    $query->bindValue(1, $username);
    $query->bindValue(2, '');
    $query->bindValue(3, $hash);
    $query->bindValue(4, $mail);
    $query->execute();
    header("Location: back.php");
}
