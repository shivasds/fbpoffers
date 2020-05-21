<?php
require_once("dbcon.php");
$sql="SELECT * FROM leads";
if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result); 
  echo $rowcount; 
  }


?>