<?php
$conn = mysqli_connect("sql211.epizy.com", "epiz_20192036", sihung84265);
mysqli_select_db($conn, "epiz_20192036_study");
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: index.php');
?>
