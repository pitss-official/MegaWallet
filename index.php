<?php
require_once ("Application/classLoader.php");
//require ("Application/Classes/Parser.php");
use System\Environment;
$env= new Environment();
print_r($env->getVariables());