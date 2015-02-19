<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Men&uuml; hinzuf&uuml;gen</title>
        <link rel="stylesheet" href="../../../public/scripts/jquery-ui-1.11.2/jquery-ui.min.css">
        <link rel="stylesheet" href="../../../public/style/menue.css">
        <script src="../../../public/scripts/jquery-1.11.2.js"></script>
        <script src="../../../public/scripts/jquery-ui-1.11.2/jquery-ui.min.js"></script>
        <script src="../../../public/scripts/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <?php require_once '../../../config/connection.php'; ?>
        <?php include '../../model/addErrors.php'; ?>
        <?php include '../../model/addSubmit.php'; ?>
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
        <div id="addMenue">
            <?php //if(isset($_POST['add'])){ echo "<big style='color: red;'>".setError()."</big>"; } ?>
            <form action="add.php" method="POST" class="add">
                <p>Typ: 
                    <select name="select">
                        <option value="menue">Men&uuml;</option>
                        <option value="veggie">Vegi</option>
                    </select>
                </p>
                <p>Inhalt: <textarea name="menuecontent" id="menuecontent"></textarea></p>

                <p>Datum: <input placeholder="dd/mm/yyyy" name="date" type="text" id="datepicker"></p>
                <input type="submit" value="Best&auml;tigen" class="btnAdd" name="add">
            </form>
        </div>
        <script>
            CKEDITOR.replace('menuecontent');
        </script>
        <?php } else { ?>
        <h1>Bitte <a href="../../../public/index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
        <?php } ?>
    </body>
</html>

