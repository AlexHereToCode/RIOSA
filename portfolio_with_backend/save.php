<?php

$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$conn = mysqli_connect("localhost", "root", "", "form") or die("connection failed");
$sql = "INSERT INTO user(name, email, comment) VALUES ('{$name}','{$email}','{$comment}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/ContactUs/contact.php");
mysqli_close($conn);
?>