<?php

date_default_timezone_set('Europe/Zurich');

function accDate() {
    return date("d/m/Y");
}

function accTime() {
    return date("H:i");
}

function accDateForDB() {
    return date("Y-m-d");
}
