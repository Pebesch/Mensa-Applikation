<?php
$user_id = strip_tags(filter_input(INPUT_POST, 'id'));
$name = strip_tags(filter_input(INPUT_POST, 'username'));
$mail = (filter_input(INPUT_POST, 'mail'));

if(isset($_POST['edit'])){
    updateUser($user_id, $name, $mail);
}

function updateUser($user_id, $name, $mail){
    global $pdo;
    $query = $pdo->prepare("UPDATE personen SET username = ?, mail = ? WHERE id = ?");
    $query->bindValue(1, $name);
    $query->bindValue(2, $mail);
    $query->bindValue(3, $user_id, PDO::PARAM_INT);
    $query->execute();
    header("Location: success.php");
}