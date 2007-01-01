<div id="header">
		<div id="logo">
			<h1></h1>

		</div>
	</div>
	<div id="content">
		<h2>برای ورود نام کاربری و رمز عبور را وارد کنید</h2><p></p>
		<form method="post" action="<?php echo $ro->gen('login');?>">
		<div class="form_container">

			<div class="label">
			<label for="username">نام کاربری: </label></div>

			<div class="field">
			<input type="text" name="username" id="username" class="text_input initial_focus">
			</div>

			<div class="label"><label for="password">گذرواژه&zwnj;: </label></div>
			<div class="field"><input type="password" name="password" id="password" class="text_input"></div>
		</div>
		<p class="submit">

			<input type="submit" value="ورود">
		</p>
		</form>
	</div>
