<?php

try{
$mysqli = new mysqli("localhost","root","test","myDB");
echo "connected !!!";
}
catch(Exception $e){
    echo $e-getMessage();
    echo "Error !!!";
}