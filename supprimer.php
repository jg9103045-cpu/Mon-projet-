<?php
include "db.php";

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM produits WHERE id=$id");

header("Location: produits.php");
?>