<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>User hinzuf&uuml;gen</title>
        <link rel="stylesheet" href="../../../public/style/menue.css">
        <?php require_once '../../../config/connection.php'; ?>
        <?php include '../../model/addUser.php'; ?>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
        <div id="addMenue">
            <?php if(isset($_POST['add'])){ echo "<big style='color:red;'>".  notEmpty($username, $salt, $mail, $password, $wiederholung)."</big>"; } ?>
            <form action="add.php" method="POST" class="add">
                <p>Benutzername: <br><input placeholder="Benutzername" name="user" type="text" id="user" class="user" value="<?php echo $username; ?>"></p>
                <p>E-Mail Adresse: <br><input placeholder="E-Mail" name="mail" type="email" id="mail" class="user" value="<?php echo $mail; ?>"></p>
                <p>Passwort: <br><input placeholder="Passwort" name="pw" type="password" id="pw" class="user"></p>
                <p>Passwort wiederholen: <br><input placeholder="Wiederholen" name="pwwd" type="password" id="pwwd" class="user"></p>
                <?php //if(isset($_POST['add'])){ echo "<big style='color:red;'>".checkPW($username, $salt, $mail, $password, $wiederholung)."</big>"; } ?>
                <input type="submit" value="Best&auml;tigen" class="btnAdd" name="add">
            </form>
        </div>
        <?php } else { ?>
            <h1>Bitte <a href="../../../public/index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
        <?php } ?>
    </body>
</html>