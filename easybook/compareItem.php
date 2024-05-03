<?php


include('includes/config.php');

$find="%{$_POST['product']}%";

$ret1=mysqli_query($con,"select * from products where productName like '$find'");
$num1=mysqli_num_rows($ret1);

$ret2=mysqli_query($con2,"select * from products where productName like '$find'");
$num2=mysqli_num_rows($ret2);

if($num1>0 || $num2>0)
{
  if($row1=mysqli_fetch_array($ret1) )
  {
  // echo "Data 1--->"+$row1['productPrice'];
   $p1=$row1['productPrice'];
   //echo $p1;
   if($row2=mysqli_fetch_array($ret2))
  {
  // echo "Data 1--->"+$row2['productPrice'];
   $p2=$row2['productPrice'];
   //echo $p2;
   if($p2>$p1)
	   echo $row1['productPrice'];
    else
		echo $row2['productPrice'];
  }
   
  }
 
  

}
?>