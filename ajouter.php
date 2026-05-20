<head>
<link rel="stylesheet" href="style.css">
</head>
<?php include "db.php"; ?>

<form method="POST">

Nom: <input name="nom"><br>
Catégorie:

<select name="categorie" required>

<option value="">-- Choisir catégorie --</option>

<?php

$cats = mysqli_query($conn,"SELECT * FROM categories");

while($c = mysqli_fetch_assoc($cats)){
 echo "<option value='".$c['nom']."'>".$c['nom']."</option>";
}

?>

</select>
<br><br>
Description:<br>
<textarea name="description"></textarea><br>
Prix (FCFA): <input name="prix"><br>
Quantité: <input name="quantite"><br>

<button name="save">Enregistrer le produit</button>

</form>

<a href="produits.php" class="btn-products">📦 Produits</a>
<br><br>

<?php

if(isset($_POST['save'])){

$nom=$_POST['nom'];
$cat=$_POST['categorie'];
$desc=$_POST['description'];
$prix=$_POST['prix'];
$qte=$_POST['quantite'];

mysqli_query($conn,"INSERT INTO produits VALUES(NULL,'$nom','$cat','$desc','$prix','$qte')");

header("Location: produits.php");
}
?>