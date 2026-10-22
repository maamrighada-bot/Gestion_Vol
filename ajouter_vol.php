<?php
    require "connexion.php"; // inclure la connexion
    $numero = $_POST['numero_vol'];
    $destination = $_POST['destination'];
    $epoque = $_POST['epoque'];
    $statut = $_POST['statut'];
    $sql = "INSERT INTO flights(numero_vol, destination, epoque, statut)
    VALUES ('$numero','$destination','$epoque','$statut')";
    $res=mysqli_query($conn,$sql);
    if($res){
    if(mysqli_affected_rows($conn)>0){ 
        echo "<h4 style=color:red;>Nouveau vol ajouté avec succès !</h4> <br>";
        echo "<a href='ajouter_vol.html'> Ajouter un autre vol</a><br>";
        echo "<a href='liste_vols.php'> Voir la liste des vols</a>";
    } else {
        echo " Erreur : ". mysqli_error($conn) ;
        
    }}
    
    mysqli_close($conn);
?>
