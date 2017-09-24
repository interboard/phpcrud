<?php
class crud{

public $hello = 'Hello World';

function hello(){
        echo $this->hello;
    }
}

$demo = new crud;
$demo->hello();



?>
