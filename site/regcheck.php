<?php   
$username=$_POST['name'];  
$password=$_POST['password'];  
$pwd_again=$_POST['pwd_again'];  
$code=$_POST['check'];  
if($username==""|| $password=="")  
{  
    echo"用户名或者密码不能为空";  
}  
else   
{  
    if($password!=$pwd_again)  
    {  
        echo"两次输入的密码不一致,请重新输入！";  
        echo"<a href='register.php'>重新输入</a>";  
          
    }  
    else  
    {  
		$con = mysql_connect("localhost","root","");
		if (!$con)
		  {
			die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("user", $con);
		$result = mysql_query("SELECT * FROM user_info	WHERE username = '$username'");
		if($row = mysql_fetch_array($result))
		  {  
		  echo $row['username'];
		  echo "用户名已存在 ";
		  }
		else{
		  echo "<div>
		  <p>注册成功</p>
		  </div>";

			$sql="INSERT INTO user_info (username,password)
			VALUES
			('$_POST[name]','$_POST[password]')";
		}
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		mysql_close($con);
    }  
}  
?>