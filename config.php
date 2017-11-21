<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('mysql.agh.edu.pl', 'pbaranik', 'VxCsFciUM5niPGoW');
mysql_select_db('pbaranik');

//Username of the Administrator
$admin='admin1';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
include('init.php');
?>
