<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">  
<title>登录页面</title>  
</head>  
<style type="text/CSS">  
    .div  
    {  
        height:100px;  
        width:300px;  
        text-align:center;  
		margin-left: 500px;
    }    
    .button  
    {  
        font-size:15px;     
    }  
    </style>  
<body>  
<form method="post" action="check.php">  
<div class="div">  
	<h1>登陆页面</h1>
	<img src="1.jpg"  class="img-rounded"><br><br>
    用户名:<input type="text" name="name" >  <br><br>
    密 &nbsp码:<input type="password" name="password">  <br><br>
    <div class="button">  
    <input type="submit" value="提交">  
    <input type="reset" value="清除">  
    <a href="register.php" >注  册</a>  
</div>  
</div>
</form>
</body>  
</html>