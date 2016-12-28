<?php

// tytuł wiadomości
$tytul = "Zarejestruj nowego konsultanta: " . $imie . $nazwisko;
// treść wiadomości
$tresc = "Data wysłania: " . date("H:i d-m-Y").PHP_EOL.PHP_EOL.
"Email: " . $email.PHP_EOL.
"Imie: " . $imie.PHP_EOL.
"Nazwisko: " . $nazwisko.PHP_EOL.
"Pesel: " . $pesel.PHP_EOL.
"Telefon: " . $telefon.PHP_EOL.
"Adres: " . $adres.PHP_EOL.
"Kod pocztowy: " . $kod_pocztowy.PHP_EOL.
"Miasto: " . $miasto.PHP_EOL.
"Starter za: " . $starter.PHP_EOL.PHP_EOL.
"Po rejestracji nie zapomnij ! \n -dodać do naszych grup Oriflame=Niezależność oraz I<3Ori\n -oficjalnie przywitać na grupie I<3Ori\n -wysłać nasze materiały\n -zrobić z osobą listę kontaktów i test osobowości\n -ustalić CEL :)\n\n Pozdrawiam Marcin Włodarczak";
// nagłówki wiadomości oddzielone stałą PHP_EOL
$naglowki = "From: Oriflame = Niezależność <rejestracja@oriflame=niezaleznosc.pl>".PHP_EOL."Content-type: text/plain; charset=utf-8"
.PHP_EOL."Reply-To: Marcin Włodarczak <marcinus1101@gmail.com>";
// adres e-mail adresata
$emailsponsora = "marcinus1101@gmail.com";
// wysyłanie maila za pomocą funkcji mail()
if(mail($emailsponsora, $tytul, $tresc, $naglowki)) {
	echo   '<p>E-mail został wysłany na adres: '.$emailsponsora.'</p>';
}
else echo '<p>Nie udało się wysłać wiadomości.</p>';
?>
