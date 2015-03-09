<?php
$menue_id = strip_tags(filter_input(INPUT_POST, 'id'));
$type = strip_tags(filter_input(INPUT_POST, 'select'));
$content = (filter_input(INPUT_POST, 'menuecontent'));
$date = strip_tags(filter_input(INPUT_POST, 'date'));

if(isset($_POST['edit'])){
    updateMenue($menue_id, $type, $content, changeOrder($date));
}

function changeOrder($date) {
    $day = substr($date, 0, 2);
    $month = substr($date, 3, 2);
    $year = substr($date, 6, 4);
    $newDate = $year . "-" . $month . "-" . $day;
    return $newDate;
}

function updateMenue($menue_id, $type, $content, $date){
    global $pdo;
    $query = $pdo->prepare("UPDATE `menue` SET `type`=?, `content`=?, `date`=? WHERE id='$menue_id'");
    $query->bindValue(1, $type);
    $query->bindValue(2, $content);
    $query->bindValue(3, $date);
    $query->execute();
    header("Location: success.php");
}
