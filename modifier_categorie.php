<head>
<link rel="stylesheet" href="style.css">
</head>

<?php
include "db.php";
include "navbar.php";

$id=$_GET['id'];

$r=mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
$c=mysqli_fetch_assoc($r);
?>

<a href="categories.php" class="btn-products">📂 Catégories</a>
<br><br>

<form method="POST">

<h3>Modifier catégorie</h3>

Nom catégorie:
<input name="nom" value="<?=$c['nom']?>" required>

<button name="update">Modifier</button>

</form>

<?php
if(isset($_POST['update'])){
mysqli_query($conn,"UPDATE categories SET nom='$_POST[nom]' WHERE id=$id");
header("Location: categories.php");
}
?>