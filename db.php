<?php


$conection = mysqli_connect('colocalhost','apache','888ngroup888','cms_php');

//verificarea connectarii cu db
if ($conection){
    echo "Ura sa conectat";
}