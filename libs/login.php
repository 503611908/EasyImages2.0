<?php
/*
 * 登录页面
 */
require_once 'function.php';
require_once __DIR__ . '/header.php';
// 提交登录
if (isset($_POST['password'])) {
	checkLogin();
	Header("Location:../");
}

?>
<center>
	<div class="center" style="margin: 40px;">
		<form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return md5_post()">
			<div class="form-group">
				<div class="has-success">
					<input type="password" name="password" id="password" class="form-control" placeholder="请输入登录密码">
				</div>
				<input type="hidden" name="password" id="md5_password">
			</div>
			<button type="submit" class="btn btn-primary">登录</button>
		</form>
	</div>
</center>
<script src="../public/static/md5.min.js"></script>
<script>
	function md5_post() {
		var password = document.getElementById('password');
		var md5pwd = document.getElementById('md5_password');
		md5pwd.value = md5(password.value);
		//可以校验判断表单内容，true就是通过提交，false，阻止提交
		return true;
	}
</script>

<?php
include_once __DIR__ . '/footer.php';
