<?php

function autoLoad($className) {
    require_once "controllers/$className.php";
}

spl_autoload_register('autoLoad');