<?php
$nome = filter_var ($_POST["fname"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$cognome = filter_var ($_POST["lname"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var ($_POST["email"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$numero = filter_var ($_POST["numero"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$username = filter_var ($_POST["username"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_var ($_POST["password"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo "Hai inserito i seguenti dati: ".  "<br>".$nome."<br>".$cognome."<br>".$email."<br>".$numero."<br>".$username."<br>".$password."<br>";
?>
