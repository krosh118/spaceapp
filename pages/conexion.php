<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','imagine_archivos');
define('DB_USER','imagine_archivos');
define('DB_PASS','195010');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
