<?php
function fetchUser() {
    global $pdo;
    $sql = "SELECT * FROM personen ORDER BY id";
    $q = $pdo->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}