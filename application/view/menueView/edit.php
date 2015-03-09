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
        <?php include '../../model/fetchUpcoming.php'; ?>
        <?php include '../../model/updateMenues.php'; ?>
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
        <div id="addMenue">
            <?php
            $menueid = strip_tags(filter_input(INPUT_GET, 'edit'));
            $q = fetchSingleMenue($menueid);
            foreach ($q as $r) {
            $formDate = date("d/m/Y", strtotime($r['date']));
            ?>
            <form action="edit.php" method="POST" class="add">
                <p>Typ: 
                    <select name="select">
                        <?php if($r['type'] == "veggie"){ ?>
                        <option value="veggie" selected="selected">Vegi</option>
                        <option value="menue">Men&uuml;</option>
                        <?php } else { ?>
                        <option value="veggie">Vegi</option>
                        <option value="menue" selected="selected">Men&uuml;</option>
                        <?php } ?>


                    </select>
                </p>
                <p>Inhalt: <textarea name="menuecontent" id="menuecontent"><?php echo $r['content']; ?></textarea></p>
                <!--rows="10" cols="70" wrap="soft" class="textarea" -->
                
                <p>Datum: <input placeholder="dd/mm/yyyy" name="date" type="text" id="datepicker" value="<?php echo $formDate; ?>"></p>
                <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                <input type="submit" value="Best&auml;tigen" class="btnAdd" name="edit">
            </form>
        </div>
        <script>
            CKEDITOR.replace('menuecontent');
        </script>
        <?php }
        } else {
        ?>
        <h1>Bitte <a href="../../../index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
<?php } ?>
    </body>
</html>