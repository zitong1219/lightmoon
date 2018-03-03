<!DOCTYPE html>
<html>
<head>
	<title>Login in now</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/commonForm.css">
</head>
<body>
<a href="./index.php"><img id="return" src="../icon/return.png">返回</a>
<p id="title">LOGIN IN</p>
<div class="form_area">
<fieldset>
	<form class="form-inline" action='login_action.php' method="post">
		<div class="form-group">
			<label>用户名：</label>
			<input class="form-control" type="text" name="name">
		</div>
		<div class="form-group">
			<label>口  令：</label> 
			<input class="form-control" type="password" name="password" >
		</div><br>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-default" value="登陆">
		</div>
		
	</form>
</fieldset>
</div>
</body>
</html>