<?php
$con = mysql_connect("db0.daocloudinternal.io:60277","root","SS3EO1YH1");
if (!$con){
  die('Could not connect: ' . mysql_error());
}else{
	echo "mysql connected!";
}
echo "Hello Docker";
mysql_close($con);

?>
