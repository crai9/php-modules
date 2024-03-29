{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="login" assign="obj"}
<div>
	<h2>Login</h2>
	<form autocomplete="off" method="post" action="./moduleadmin.php" id="loginForm">
	<div>
		{if $obj->mLoginMessage neq ""}
			<p class="error">{$obj->mLoginMessage}</p>
		{/if}    
		<p>
			<!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
			<input style="display:none" type="text" name="fakeusernameremembered"/>
			<input style="display:none" type="password" name="fakepasswordremembered"/>
			<label for="username">Username:</label>
			<input type="text" name="username" size="35" />
			<label for="password">Password:</label>
			<input type="password" name="password" size="35" />
			<input type="submit" name="submit" value="Login" />
		</p>        
	</div>
	</form>
</div>
