<?php
$con = mysql_connect("db0.daocloudinternal.io:60277","root","SS3EO1YH1");
if (!$con){
  die('Could not connect: ' . mysql_error());
}else{
	mysql_select_db("dragon", $con);
	$result = mysql_query("SELECT * FROM user");
  	while($row = mysql_fetch_array($result))
  	{
  		var_dump($row);
  		echo "<br />";
  	}
}
echo "Hello Docker";
mysql_close($con);

?>
