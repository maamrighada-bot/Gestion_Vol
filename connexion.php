<?php
$host = "localhost";  // Serveur MySQL
$user = "root";       // Utilisateur MySQL (par défaut root)
$pass = "";           // Mot de passe (vide sous XAMPP/WAMP)
$db   = "aeroport";   // Nom de la base de données

// Connexion
$conn = mysqli_connect($host, $user, $pass,$db) or die("erreur de connexion!");
?>