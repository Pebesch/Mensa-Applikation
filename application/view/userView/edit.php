<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Benutzerangaben &auml;ndern</title>
        <link rel="stylesheet" href="../../../public/style/menue.css">
        <?php require_once '../../../config/connection.php'; ?>
        <?php include '../../model/fetchUser.php'; ?>
        <?php include '../../model/updateUser.php'; ?>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
            <div id="addMenue">
                <?php
                $userid = strip_tags(filter_input(INPUT_GET, 'edit'));
                $q = fetchSingleUser($userid);
                foreach ($q as $r) {
                    ?>
                    <form action="edit.php" method="POST" class="add">
                        <p>Benutzername: <br><input type="text" name="username" value="<?php echo $r['username']; ?>"></p>
                        <p>E-Mailadresse: <br><input type="email" name="mail" value="<?php echo $r['mail']; ?>"></p>
                        <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                        <input type="submit" value="Best&auml;tigen" class="btnAdd" name="edit">
                    </form>
                </div>
                <?php
            }
        } else {
            ?>
            <h1>Bitte <a href="../../../index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
<?php } ?>
    </body>
</html>