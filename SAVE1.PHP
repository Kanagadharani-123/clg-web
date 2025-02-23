<?php
include('connect1.php');

$f=$_POST['fn'];
$l=$_POST['ln'];
$d=$_POST['db'];
$e=$_POST['em'];
$pp=$_POST['ps'];
$n=$_POST['mn'];
$m=$_POST['mm'];
$r=$_POST['re'];
$c=$_POST['ca'];
$gen=$_POST['gender'];
$txt=$_POST['ta'];

$sql="insert into PG values('$f','$l','$d','$e','$pp','$n','$m','$r','$c','$gen','$txt')";
$result=mysqli_query($cn,$sql);

?>