<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>jQuery</title>
<script src='js/jquery-3.1.1.min.js'></script>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 -->
<script>
$( document ).ready(function() {
	
	$('#testForm').submit(function() {

		if(!$('#user_name').val() ) { alert('請您填寫資料!'); $('#user_name').focus();} 
		else if(!$('#user_password').val() ) { alert('請您填寫密碼!'); $('#user_password').focus();}
		else if(!isEmail($('#user_email').val())) { alert('您的Email格式錯誤!'); $('#user_email').focus();}
		else if(!$('#user_file').val() ) { alert('請您上傳檔案!'); $('#user_file').focus();}
		else if(!$('#user_desc').val() ) { alert('請您填寫描述!'); $('#user_desc').focus(); } 
		else if($('input[name=user_sex]:checked').val() == undefined) {alert('請選擇性別');}
		else {
			return true;
		}
		
		return false;
		
	});
	
	$('#redirect_btn').click(function(){
		$(location).attr('href', '/PDO/select.php');
	});
	
});

function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
	
</script>
</head>
<body>
<button id='redirect_btn'>跳頁</button><br>
<form id='testForm' name='testForm' method='POST' action='post.php' enctype="multipart/form-data">
	<input type='text' id='user_name' name='user_name'><br>
	<input type='password' id='user_password' name='user_password'><br>
	<input type='text' id='user_email' name='user_email'><br>
	<input type='file' id='user_file' name='user_file'><br>
	<textarea id='user_desc' name='user_desc'></textarea><br>
	<input type='radio' name='user_sex' value='M'>M
	<input type='radio' name='user_sex' value='F'>F
	<br>
	<input type='submit'/>
</form>
</body>
</html>