<?php
extract( $_POST );
$con = mysqli_connect("localhost","root","","odform");
$check=("SELECT mobile FROM odtable WHERE mobile='$t5';");
$rs=mysqli_query($con,$check);
if($rs->num_rows)
{
echo "$t5 <br>";
echo "Your bus Pass is valid until ".date("d-m-Y")."<br>";
}
else
{
	$newUser=("INSERT INTO odtable values('$t5');");
	if(mysqli_query($con,$newUser))
	{
	  	echo "you are new";
	}
	else
	{
		echo "error";
	}
}
?>