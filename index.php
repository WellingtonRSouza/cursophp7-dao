<?php

require_once("config.php");

$root = new Usuario();

$root->LoadById(3);

echo $root;

?>