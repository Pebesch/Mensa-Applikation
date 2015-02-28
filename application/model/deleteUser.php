<?php
$userid = strip_tags(filter_input(INPUT_POST, 'deleten'));

if(isset($_POST['delete'])){
    delete($userid);
} else if(isset($_POST['back'])){
    headback();
}

function delete($userid){
    global $pdo;
    $query = $pdo->prepare('DELETE FROM personen WHERE id = ?');
    $query->bindValue(1, $userid);
    $query->execute();
    // Wenn der Button "Löschen" betätigt wurde wird die der Datensatz mit der Verknüpften ID gelöscht
    header("Location:../adminView/userView.php");
}

function headback(){
    header("Location:../adminView/userView.php");
}