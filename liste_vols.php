<?php
require "connexion.php";
$sql="SELECT * FROM flights ORDER BY epoque ASC";
$result = mysqli_query($conn,$sql);
 ?><header style=text-align:center;><h1 style=color:blue;>Liste des Vols</h1></header>
 <div >
  <ul type="square">
    <li><a href="modifier.html" style=color:#4DCCBD;>Modifier un  vol</a></li>
    <li><a href="supp_vol.html" style=color:#FF3072; >Supprimer un vol </a></li>
    <li>  <a href="ajouter_vol.html" style=color:#ED8663;>Ajouter un vol</a> </li>
    <li>  <a href="index.html" style=color:#2374AB; >Retour au Accueil</a></li>
  </ul>
  </div>
  <table border="1" width="100%">
    <tr>
      <th style=background-color:lightblue;>Numéro</th>
      <th style=background-color:burlywood;>Destination</th>
      <th style=background-color:lightpink;>Epoque</th>
      <th style=background-color:lightgreen;>Statut</th>
    </tr> 
    <?php while($row = mysqli_fetch_array($result)) {?>
    <tr>
      <td><?php echo ($row['numero_vol']); ?></td>
      <td><?php echo ($row['destination']); ?></td>
      <td><?php echo( $row['epoque']);?></td>
      <td><?php echo($row['statut']);?></td>
    </tr>
  <?php }?>
  </table>
  
  


