<?php 
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{  
  echo "����д�û���<br>";  
}  
elseif($password == "")  
{   
  echo"<script type='text/javascript'>alert('����д����');location='login.php';</script>";      
}  
else  
{   
	$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("user", $con);

	$result = mysql_query("SELECT * FROM user_info WHERE username='$name'");
	$resultname = mysql_query("SELECT * FROM user_info WHERE password='$password'");
	if($row = mysql_fetch_array($result))
	  {  
	  echo "�û� ";
	  echo $row['name'];
	  if($row = mysql_fetch_array($resultname))
	  {
	  echo "��¼�ɹ�";
	  echo "<br />";
	  setcookie("mycookie_name", $name);
	  setcookie("count", ++$count);
	  echo "���ѷ��� ";
	  echo $_COOKIE["count"];
	  echo " ��";
	  }
	else{
	  echo "�������";
	}

	  }
	else{
	  echo "���û�û��ע�ᣡ";
	} 
}  
?>