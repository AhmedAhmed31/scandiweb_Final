<?php
include 'init.php';

require "database/database.php";
include "Templates/Header.php";
//Database connection
$db = database::getInstance();


include "Templates/navebar.php";
include "product/Products.php";


include "Templates/Footer.php";

