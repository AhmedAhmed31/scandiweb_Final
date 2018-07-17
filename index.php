<?php
include 'init.php';

include "Templates/Header.php";
//Database connection
$db = database::getInstance();


include "Templates/navebar.php";
include "product/Productsview.php";


include "Templates/Footer.php";

