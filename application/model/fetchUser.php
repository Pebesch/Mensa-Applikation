<?php
$userid = strip_tags(filter_input(INPUT_GET, 'del'));

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
    $sql = "SELECT * FROM personen WHERE id = '$userid'";
    $q = $pdo->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}