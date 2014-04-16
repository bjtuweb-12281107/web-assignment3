<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">  
<title>注册页面</title>  
</head>  
<style type="text/css">  
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

<form method="post" action="regcheck.php">  
<div class="div">  
	<h1>注册页面</h1>  
	<img src="1.jpg"><br><br>
    <div class="text">  
    &nbsp&nbsp&nbsp&nbsp用户名<input type="text" name="name" ></div>  <br><br>
    <div class="text">  
    &nbsp&nbsp&nbsp&nbsp密 码:<input type="password" name="password"></div>  <br><br>
    <div class="text">  
    重复密码：<input type="password" name="pwd_again"></div>   <br><br>
    <input type="submit" value="提交">  
    <input type="reset" value="清除">  
</div>  
</form>
</body>  
</html>