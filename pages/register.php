<!DOCTYPE html>
<html>
<head>
	<title>New Friends Registion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/commonForm.css">
	<script type="text/javascript" src="../js/register.js"></script>
</head>
<body>
<a href="./index.php"><img id="return" src="../icon/return.png">返回</a>
<p id="title">JOIN US</p>
<div class="form_area">
<fieldset>
<legend>新用户注册</legend>
	<form class="form-inline" name="newRegister" action="register_action.php" method="post">
		<div class="form-group">
			<label>用户名：</label>  
			<input class="textInput form-control" type="text" name="user_name">
		</div>
		<div class="form-group">
			<label>口令：</label> 
			<input class="textInput form-control" type="password" name="Password1">
		</div>
		<div class="form-group">
			<label>确认口令：</label>
			<input class="textInput form-control" type="password" name="Password2">
		</div><br>
		<div class="form-group">
			<input class="btn btn-default" type="button" name="check" onclick="checktest()" value="检查">	
		</div>
		<div class="form-group">
			<input class="btn btn-default submit" type="submit" name="btnSubmit" value="确认">

			<input class="btn btn-default submit" type="reset" name="reset" value="重置">
		</div>	
		
	</form>
</fieldset>
</div>
</body>
</html>
