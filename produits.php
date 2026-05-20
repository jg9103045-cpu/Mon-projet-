<head>
<link rel="stylesheet" href="style.css">
</head>
<?php include "db.php"; ?>
<?php include "navbar.php"; ?>

<form method="GET">
<input type="text" name="search" placeholder="Rechercher produit">
<button>Rechercher</button>
</form>

<a href="ajouter.php">➕ Ajouter produit</a>

<table border="1">
<tr>
<th>ID</th>
<th>Nom</th>
<th>Description</th>
<th>Catégorie</th>
<th>Prix</th>
<th>Quantité</th>
<th>Actions</th>
</tr>

<?php

$search = $_GET['search'] ?? '';

$sql = "SELECT * FROM produits WHERE nom LIKE '%$search%'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
 echo "<tr>";
 echo "<td>".$row['id']."</td>";
 echo "<td>".$row['nom']."</td>";
 echo "<td>".$row['description']."</td>";
 echo "<td>".$row['categorie']."</td>";
 echo "<td>".$row['prix']."</td>";
 echo "<td>".$row['quantite']."</td>";
 echo "<td>
 <a href='modifier.php?id=".$row['id']."'>Modifier</a> |
 <a href='supprimer.php?id=".$row['id']."'>Supprimer</a>
 </td>";
 echo "</tr>";
}
?>

</table>