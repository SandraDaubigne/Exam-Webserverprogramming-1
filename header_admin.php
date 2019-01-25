<!-- /**
* En header till admin
* 
* Denna header visas om du är inloggad i admin
*
* @param author Sandra Daubigne miss.daubigne@gmail.com
*/ -->

<!-- Alla headers har include databas/style och session_start. Alla andra sidor har en header -->
<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hej</title>
    <link rel= "stylesheet" href = "style.css">
</head>

<!-- // Formulär till menyraden: .  -->
<form >
    <button type="text"><a href="logout.php">Logga ut</a></button>
</form>