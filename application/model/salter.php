<?php
/* random string */
$length = 30;

function rand_string($length) {
    $str = "";
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen($chars);
    for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
    }
    return $str;
}

$pass = strip_tags(filter_input(INPUT_POST, 'pass'));
$salt = strip_tags(filter_input(INPUT_POST, 'salt'));

function salter($pass, $salt) {
    return md5($pass . $salt);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../public/style/salter.css">
    </head>
    <body>
        <div>
            <form method="POST" action="salter.php">
                <input type="text" placeholder="Passwort" name="pass"><br>
                <input type="text" placeholder="Salt" name="salt"><br>
                <input class="a" type="submit" name="get" value="senden"><br>
                <input class="a" type="submit" name="new" value="New Salt!"><br>
            </form>
            <?php
            if (isset($_POST['get'])) {
                echo "Das gehashte Passwort ist: ".salter($pass, $salt)."<br>";
                echo "Das Passwort ist: ".$pass."<br>";
                echo "Der Salt ist: ".$salt."<br>";
            }
            
            if (isset($_POST['new'])){
                echo "Neuer Salt: ".rand_string($length);
            }
            ?>
        </div>
    </body>
</html>