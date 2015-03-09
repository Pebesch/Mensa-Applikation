<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../../public/style/overview.css">
        <title>Mensa Applikation</title>
        <?php include '../../../config/connection.php'; ?>
        <?php include '../../model/logout.php'; ?>
        <?php include '../../model/date.php'; ?>
        <?php include '../../model/fetchUser.php'; ?>
    </head>
    <body>
        <?php if (isset($_SESSION['logged'])) { ?>
            <div id="wrapper">
                <header>
                    <h1>Mensa Applikation</h1>
                    <form method="POST" action="../overview.php">
                        <input class="logout" type="submit" name="logout" value="Logout">
                    </form>
                </header>
                <div id="options">
                    &#8594; <a href="../overview.php" class="option">&Uuml;bersicht</a><br>
                    &#8594; <a href="../userView/add.php" class="option">User hinzuf&uuml;gen</a><br>
                    &#8594; <a href="../menueView/add.php" class="option">Men&uuml; hinzuf&uuml;gen</a><br>
                    &#8594; <a href="menueView.php" class="option">Alle Men&uuml;s ansehen</a>
                </div>
                <div id="content">
                    <h2>Alle Benutzer</h2>
                    <p>
                    <table>
                        <tr>
                            <th>Benutzername</th>
                            <th class="cont">E-Mail Adresse</th>
                            <th>Bearbeiten</th>
                            <th class="cont" >L&ouml;schen</th>
                        </tr>
                        <?php
                        $q = fetchUser();
                        $anzahl;
                        $zeile;
                        $counter = 0;
                        foreach ($q as $r) {
                                $counter++;
                                $zahl = $counter;
                                if ($zahl % 2 != 0) {
                                    $zeile = 0;
                                } else {
                                    $zeile = 1;
                                }
                                ?>

                                <tr class="user<?php echo $zeile; ?>">
                                    <td class="cont"><?php echo $r['username'] ?></td>
                                    <td class="cont"><?php echo $r['mail'] ?></td>
                                    <td class="cont"><a href='../userView/edit.php?edit=<?php echo $r['id'] ?>'>Bearbeiten</a></td>
                                    <td class="cont"><a href='../userView/delete.php?del=<?php echo $r['id'] ?>'>L&ouml;schen</a></td>
                                <?php } ?> 
                            </tr>
                        </table>
                        </p>
                    </div>
                    <footer>
                        <small>&COPY; Peter Schmucki</small>
                        <small style='float: right;'><?php
                            echo accDate();
                            echo " ";
                            echo accTime();
                            ?></small>
                    </footer>
                </div>
            <?php } else { ?>
                <h1>Bitte <a href="../../index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
            <?php } ?>
    </body>
</html>

