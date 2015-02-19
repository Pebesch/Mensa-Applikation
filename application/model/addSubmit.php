<?php

$option = strip_tags(filter_input(INPUT_POST, 'select'));
$content = (filter_input(INPUT_POST, 'menuecontent'));
$date = strip_tags(filter_input(INPUT_POST, 'date'));

//function changeChars($date) {
//    $search = "/";
//    $replace = "";
//    str_replace($search, $replace, $date);
//}

function changeOrder($date) {
    $day = substr($date, 0, 2);
    $month = substr($date, 3, 2);
    $year = substr($date, 6, 4);
    $newDate = $year . "-" . $month . "-" . $day;
    return $newDate;
}

function isNotEmpty($option, $content, $date) {
    if (empty($option) || empty($content) || empty($date)) {
        return true;
    }
}

if (isset($_POST['add'])) {
    if (!isNotEmpty($option, $content, $date) == true) {
        fillIn($option, $content, changeOrder($date));
//        setError();
    } else {
        
    }
}

//function setError(){
//    return "Alle Felder m&uuml;ssen ausgef&uuml;llt sein";
//}


function fillIn($option, $content, $date) {
    global $pdo;
    $query = $pdo->prepare('INSERT INTO menue(type, content, date) VALUE (?,?,?)');
    $query->bindValue(1, $option);
    $query->bindValue(2, $content);
    $query->bindValue(3, $date);
    $query->execute();
    header("Location: back.php");
}
