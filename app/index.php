<?php

$con = new mysqli("mysql_db", "root", "root", "mysql");

echo $con?"Connection":"fail";