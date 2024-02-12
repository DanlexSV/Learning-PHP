<?php
$name = $_REQUEST["name"];
$age = $_REQUEST["age"];
if ($age < 18) {
    echo $name . " es una persona menor de edad.";
} else {
    echo $name . " es una persona mayor de edad";
}
?>