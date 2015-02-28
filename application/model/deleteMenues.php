<?php
$menueid = strip_tags(filter_input(INPUT_POST, 'deleten'));

if(isset($_POST['delete'])){
    delete($menueid);
} else if(isset($_POST['back'])){
    headback();
}

function delete($menueid){
    global $pdo;
    $query = $pdo->prepare('DELETE FROM menue WHERE id = ?');
    $query->bindValue(1, $menueid);
    $query->execute();
    // Wenn der Button "Löschen" betätigt wurde wird die der Datensatz mit der Verknüpften ID gelöscht
    header("Location:../adminView/menueView.php");
}

function headback(){
    header("Location:../adminView/menueView.php");
}