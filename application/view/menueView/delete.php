<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../../../public/style/menue.css">
        <title>Mensa Applikation</title>
        <?php include '../../../config/connection.php'; ?>
        <?php include '../../model/fetchUpcoming.php'; ?>
        <?php include '../../model/deleteMenues.php'; ?>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
            <div id="addMenue">
                <?php
                $menueid = strip_tags(filter_input(INPUT_GET, 'del'));
                $q = fetchSingleMenue($menueid);
                foreach ($q as $r) {
                    ?>
                    <p>Wollen Sie wirklich das Men&uuml;: <b><?php echo $r['content'] ?></b> l&ouml;schen?</p>
                <?php } ?>
                <form method="POST" action="delete.php" class="add">
                    <input type="hidden" name="deleten" value="<?php echo $_GET['del'] ?>" class="btnAdd">
                    <input type="submit" name="delete" value="L&ouml;schen" class="btnAdd">
                    <input type="submit" name="back" value="Abbrechen" class="btnAdd">
                </form>
            </div>
        <?php } else { ?>
            <h1>Bitte <a href="../../index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
        <?php } ?>
    </body>
</html>