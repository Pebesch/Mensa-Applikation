<?php
$menueid = strip_tags(filter_input(INPUT_POST, 'del'));

function fetchUpcoming($datum) {
    global $pdo;
    $sql = "SELECT * FROM menue  WHERE DATE >= '$datum' ORDER BY DATE LIMIT 10";
    $q = $pdo->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}

function fetchMenues() {
    global $pdo;
    $sql = "SELECT * FROM menue ORDER BY DATE";
    $q = $pdo->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}

function fetchSingleMenue($menueid){
    global $pdo;
    $sql = "SELECT * FROM menue WHERE id = '$menueid'";
    $q = $pdo->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q->fetchAll();
}