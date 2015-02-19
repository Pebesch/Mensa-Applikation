<!-- 
    Document   : index.php
    Created on : 03.01.2015, 18:42:43
    Author     : Peter Schmucki, Andreas Umbricht
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style/index.css">
        <title>Mensa Applikation</title>
        <?php include '../config/connection.php'; ?>
    </head>
    <body>
        <?php 
            include '../application/model/login.php';
            include '../application/view/indexView/index.php'; 
        ?> 
    </body>
</html>