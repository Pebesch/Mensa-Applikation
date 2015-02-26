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
        <?php include '../../model/fetchUpcoming.php'; ?>
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
                    &#8594; <a href="userView.php" class="option">Alle User ansehen</a><br>
                    &#8594; <a href="../menueView/add.php" class="option">Men&uuml; hinzuf&uuml;gen</a>
                </div>
                <div id="content">
                    <h2>Alle Men&uuml;s</h2>
                    <p>
                        <?php
                        $accDate = accDateForDB();
                        ?>
                    <table>
                        <tr>
                            <th>Typ</th>
                            <th class="cont">Men&uuml;</th>
                            <th>Datum</th>
                            <th class="cont">Bewertung</th>
                            <th>Bearbeiten</th>
                            <th class="cont" >L&ouml;schen</th>
                        </tr>
                        <?php
                        $q = fetchMenues();
                        foreach ($q as $r) { 
                        $formDate = date("d/m/Y", strtotime($r['date']));
                        $type = $r['type']; 
                        if($type == "veggie"){
                            $type2 = "veggie";
                            $string = "Vegtarisch";
                        } else {
                            $type2 = "menue";
                            $string = "Men&uuml;";
                        }
                            ?>
                        
                            <tr class="<?php echo $type2; ?>">
                                <td><?php echo $string ?></td>
                                <td class="cont"><?php echo $r['content'] ?></td>
                                <td><?php echo $formDate ?></td>
                                <td class="cont"><?php echo $r['bewertung'] ?></td>
                                <td>Edit</td>
                                <td class="cont">X</td>
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
            <h1>Bitte <a href="../../public/index.php">einloggen</a> oder den <a href="mailto:pebs@gmx.ch">Administrator</a> kontaktieren.</h1>
        <?php } ?>
    </body>
</html>