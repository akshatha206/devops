<?php
$dbh=mysqli_connect('localhost','root','','test');

//mysqli_select_db('example')or die(mysql_error());
//if(isset($_POST['name']))
$nme=$_POST['name'];

if($nme!="")
{
$result=mysqli_query($dbh,"INSERT INTO test1 VALUES('$nme')")or die(mysqli_error($dbh)) ;
}
else
{
    echo "one of the field is empty";
}

echo "See what you typed";
$var=mysqli_query($dbh,"SELECT * FROM test1")or die(mysqli_error($dbh));
print"<table border=1px><tr><td>Name</td></tr>";
while($arr=mysqli_fetch_row($var))
	{

       echo"<tr><th>$arr[0]</th><th>";	
    }
mysqli_free_result($var);
mysqli_close($dbh);
?>
