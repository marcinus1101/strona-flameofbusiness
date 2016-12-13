<?php
/******************************************************
* connection.php
* konfiguracja połączenia z bazą danych
******************************************************/
    // serwer
$mysql_server = "localhost";
    // admin
$mysql_admin = "wlodara";
    // hasło
$mysql_pass = "zaq1@WSX";
    // nazwa baza
$mysql_db = "Oriflame";
    // nawiązujemy połączenie z serwerem MySQL
mysql_connect($mysql_server,$mysql_admin,$mysql_pass) or die('Brak połączenia z serwerem MySQL.');
        // łączymy się z bazą danych
mysql_select_db($mysql_db) or die('Brak połączenia z bazą MySQL.');

?>
