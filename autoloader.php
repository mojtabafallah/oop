<?php
spl_autoload_register(function ($class_name) {
    require_once "admin" . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR . $class_name . ".php";
});
