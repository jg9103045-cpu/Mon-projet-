<head>
<link rel="stylesheet" href="style.css">
</head>

<?php
include "db.php";

mysqli_query($conn,"DELETE FROM categories WHERE id=$_GET[id]");

header("Location: categories.php");
?>