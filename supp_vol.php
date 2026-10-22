<?php 
require "connexion.php";
$nmvol=$_POST['nmvol'];
$sql="DELETE FROM flights WHERE numero_vol='$nmvol'";
$result = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0){
    echo"<h4 style=color:red;>Vol supprimer avec succée!<br> </h4>";
     echo "<a href='supp_vol.html'> Supprimer un autre vol</a><br>";
     echo "<a href='liste_vols.php'> Voir la liste des vols</a>";
}
else{
    echo " <h4 style=color:red;>Aucunne suppression </h4>";
}

?>