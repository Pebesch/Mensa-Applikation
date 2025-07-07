<?php
$userid = strip_tags(filter_input(INPUT_GET, 'edit'));


function fetchUser() {
    global $pdo;
    $sql = "SELECT * FROM personen ORDER BY id";
    $q = $pdo->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}

function fetchSingleUser($userid) {
    global $pdo;
    $sql = "SELECT * FROM personen WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->bindValue(1, $userid, PDO::PARAM_INT);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}