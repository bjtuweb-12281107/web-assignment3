<?php   
$username=$_POST['name'];  
$password=$_POST['password'];  
$pwd_again=$_POST['pwd_again'];  
$code=$_POST['check'];  
if($username==""|| $password=="")  
{  
    echo"�û����������벻��Ϊ��";  
}  
else   
{  
    if($password!=$pwd_again)  
    {  
        echo"������������벻һ��,���������룡";  
        echo"<a href='register.php'>��������</a>";  
          
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
		  echo "�û����Ѵ��� ";
		  }
		else{
		  echo "<div>
		  <p>ע��ɹ�</p>
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