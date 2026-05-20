<head>
<link rel="stylesheet" href="style.css">
</head>

<?php include "db.php"; ?>
<?php include "navbar.php"; ?>

<a href="categories.php" class="btn-products">📂 Catégories</a>
<br><br>

<form method="POST">

<h3>Ajouter une catégorie</h3>

Nom de la catégorie:
<input type="text" name="nom" required>

<button name="save">Enregistrer la catégorie</button>

</form>

<?php

if(isset($_POST['save'])){
mysqli_query($conn,"INSERT INTO categories VALUES(NULL,'$_POST[nom]')");
header("Location: categories.php");
}
?>