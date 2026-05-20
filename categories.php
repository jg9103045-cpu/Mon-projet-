<head>
<link rel="stylesheet" href="style.css">
</head>

<?php
include "db.php";
include "navbar.php";
?>

<a href="ajouter_categorie.php" class="btn-products">➕ Ajouter catégorie</a>

<br><br>

<table>

<tr>
<th>ID</th>
<th>Nom</th>
<th>Actions</th>
</tr>

<?php

$r=mysqli_query($conn,"SELECT * FROM categories");

while($c=mysqli_fetch_assoc($r)){
?>

<tr>
<td><?=$c['id']?></td>
<td><?=$c['nom']?></td>
<td>
<a href="modifier_categorie.php?id=<?=$c['id']?>">Modifier</a> |
<a href="supprimer_categorie.php?id=<?=$c['id']?>">Supprimer</a>
</td>
</tr>

<?php } ?>

</table>