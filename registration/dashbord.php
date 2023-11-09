<?php
session_start();
if($_SESSION['username'] ==""){
    header("Location:index.php");
} 

echo "Welcome ".$_SESSION['username'];
echo "<a href='logout.php'>Logout</a>";

<h1>hello</h1>
?>