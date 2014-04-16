<?php 
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{  
  echo "请填写用户名<br>";  
}  
elseif($password == "")  
{   
  echo"<script type='text/javascript'>alert('请填写密码');location='login.php';</script>";      
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
	  echo "用户 ";
	  echo $row['name'];
	  if($row = mysql_fetch_array($resultname))
	  {
	  echo "登录成功";
	  echo "<br />";
	  setcookie("mycookie_name", $name);
	  setcookie("count", ++$count);
	  echo "您已访问 ";
	  echo $_COOKIE["count"];
	  echo " 次";
	  }
	else{
	  echo "密码错误";
	}

	  }
	else{
	  echo "该用户没有注册！";
	} 
}  
?>