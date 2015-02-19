<?php

$option = strip_tags(filter_input(INPUT_POST, 'select'));
$content = strip_tags(filter_input(INPUT_POST, 'menuecontent'));
$date = strip_tags(filter_input(INPUT_POST, 'date'));

function getError($date, $content) {
    switch ($_POST['add']) {
        case empty($date);
            return "Alle Felder m&uuml;ssen ausgef&uuml;lt sein!";
            break;
        case empty($content);
            return "Alle Felder m&usml;ssen ausgef&uuml;lt sein!";
            break;
    }
}
