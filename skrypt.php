<?php
include('connect.php');

$email = $_POST['email'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$pesel = $_POST['pesel'];
$telefon = $_POST['telefon'];
$adres = $_POST['adres'];
$kod_pocztowy = $_POST['kod_pocztowy'];
$miasto = $_POST['miasto'];
$starter = $_POST['STARTER'];
$sponsor = $_POST['SPONSOR'];

mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf8mb4_polish_ci");
mysql_query("INSERT INTO Rejestracja SET Email='$email', Imie='$imie', Nazwisko='$nazwisko', Pesel='$pesel', Telefon='$telefon', Adres='$adres', Kod_pocztowy='$kod_pocztowy', Miasto='$miasto', Starter='$starter', Sponsor='$sponsor' ");

include('mail.php');
 ?>
