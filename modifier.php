<head>
<link rel="stylesheet" href="style.css">
</head>
<?php include "db.php";

$id=$_GET['id'];

$r=mysqli_query($conn,"SELECT * FROM produits WHERE id=$id");
$p=mysqli_fetch_assoc($r);

?>

<form method="POST">

Nom: <input name="nom" value="<?=$p['nom']?>"><br>
Catégorie: <input name="categorie" value="<?=$p['categorie']?>"><br>
Description:<textarea name="description"><?=$p['description']?></textarea><br>
Prix:<input name="prix" value="<?=$p['prix']?>"><br>
Quantité:<input name="quantite" value="<?=$p['quantite']?>"><br>

<button name="update">Modifier</button>

</form>

<?php
if(isset($_POST['update'])){

mysqli_query($conn,"UPDATE produits SET
nom='$_POST[nom]',
categorie='$_POST[categorie]',
description='$_POST[description]',
prix='$_POST[prix]',
quantite='$_POST[quantite]'
WHERE id=$id");

header("Location: produits.php");
}
?>