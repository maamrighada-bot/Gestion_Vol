<?php 
require "connexion.php";
$numv=$_POST['numvol'];
$dest=$_POST['dest'];
$ep=$_POST['ep'];
$st=$_POST['st'];
$sql="UPDATE flights SET numero_vol='$numv' , destination='$dest', epoque='$ep', statut='$st' WHERE numero_vol='$numv' ";
$result = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0 ){
    echo"<h4 style=color:red;>Vol modifier avec succée!<br> </h4>";
     echo "<a href='modifier.html'> Modifier un autre vol</a><br>";
     echo "<a href='liste_vols.php'> Voir la liste des vols</a>";
}
else{
    echo " <h4 style=color:red;>Aucunne modification </h4>";;
}


?>