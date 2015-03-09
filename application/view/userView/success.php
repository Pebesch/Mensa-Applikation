<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Erfolgreich hinzugef&uuml;gt</title>
        <link rel="stylesheet" href="../../../public/style/menue.css">
        <?php require_once '../../../config/connection.php'; ?>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
        <div id="addMenue">
            <h1>Benutzer wurde erfolgreich ge&auml;ndert. <a href="../adminView/userView.php">Zur&uuml;ck zur &Uuml;bersicht</a>.</h1>
        </div>
        <?php } else { ?>
        <h1>Bitte <a href="../../../index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
        <?php } ?>
    </body>
</html>