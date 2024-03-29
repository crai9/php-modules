{* adminmodule.tpl *}
{load_presentation_object filename="adminmodule" assign="obj"}
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Martin L Gallacher" />
	<meta name="keywords" content="Module, Catalogue" />
	<meta name="description" content="Module Catalogue" />
	<link rel="icon" href="./images/icon.png">
	<link rel="stylesheet" type="text/css" href="./Styles/styles2014.css" title="Default" media="all" />
	<script src="./scripts/modules2014.js"></script>		
	<title>Admin Module</title>
</head>
<body>

  <div id="container">
	{include file="header.tpl"}
	<p>
		<a id="Menu_HomeLink" href="Index.php">Home</a>
	</p>
	{if $obj->mLoggedIn neq TRUE}
		<div id="loginDiv">
			{include file="login.tpl"}
		</div>
	{else}
		<div id="logout">
			<a href="moduleadmin.php?Page=Logout">Logout</a>
		</div>
	
		<div id='leftItemTemplate'>
			{if $obj->mUpdateButtonDisplay}
				<h3>Update Module</h3>
			{else}
				<h3>Add New Module</h3>					
			{/if}		
			<form method="post" action="moduleadmin.php">
			{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
			<div>
				<p>
					<label for="new_album_title">Title:</label><br />
					<input type="text" name="new_module_title" value="{$obj->mModuleTitle}" size="40" />
				</p>
				<p>
					<label for="new_artist">Leader:</label><br />            
					<input type="text" name="new_leader" value="{$obj->mLeader}" size="40" />
				</p>
				<p>
					<label for="new_image">Image:</label><br />			
					<input type="text" name="new_image" value="{$obj->mImage}" size="40" />
				</p>
				<p>
					<label for="new_description">Description:</label><br />				
					<textarea rows="4" cols="50" name="new_description">{$obj->mDescription}</textarea>
				</p>
				<p>
					<label for="new_category">Category:</label><br />			
					<input type="text" name="new_category" value="{$obj->mCategory}" size="10" />
				</p>
				<p>
					<input type="hidden" name="module_id" value="{$obj->mModuleID}" />
				</p>                          
				<p>
					{if $obj->mAddButtonDisplay}
						<input type="submit" name="submit_add" value="Add" /> 
					{/if}
					{if $obj->mUpdateButtonDisplay}					
						<input type="submit" name="submit_edit" value="Update" />					
					{/if}
				</p>
			</div>
			</form>
		</div>
		{if $obj->mLeaders}
			<div id='rightItemTemplate'>
				<h3>Find Module to Update</h3>
				<form method="post" action="moduleadmin.php">
				<div>
					<p>
						<select name="leaders">
							<option>Select Leader</option>
							{* Loop through the list of artists *}
							{section name=i loop=$obj->mLeaders}
								{* Generate a new artist in the list *}
								<option value="{$obj->mLeaders[i].module_leader}">{$obj->mLeaders[i].module_leader}</option>
							{/section}        
						</select>
            				</p>
					<p>
						<input type="submit" name="submit_select_leader" value="Select Leader" />        
					</p>
				</div>
				</form>
			</div> 
		{/if}
		<div>
			{if $obj->mModules}
			<div id='rightItemTemplate'>
				<form method="post" action="moduleadmin.php">
				<div>
					<p>
						<select name="update_id">
							<option>Select Module</option>
							{* Loop through the list of artists *}
							{section name=i loop=$obj->mLeaders}
								{* Generate a new artist in the list *}
								<option value="{$obj->mModules[i].module_id}">{$obj->mModules[i].module_title}</option>
							{/section}        
						</select>
            				</p>
					<p>
						<input type="submit" name="submit_select_module" value="Select Module" />        
					</p>
				</div>
				</form>
			</div> 
		{/if}
		<div>
			{if $obj->mDelModules}
			<div id='rightItemTemplate'>
				<h3>Find Module to Delete</h3>
				<form method="post" action="moduleadmin.php">
				<div>
					<p>
						<select name="delete_id">
							<option>Select Module</option>
							{* Loop through the list of artists *}
							{section name=i loop=$obj->mLeaders}
								{* Generate a new artist in the list *}
								<option value="{$obj->mDelModules[i].module_id}">{$obj->mDelModules[i].module_title}</option>
							{/section}        
						</select>
            				</p>
					<p>
						<input type="submit" name="submit_delete_module" value="Delete Module" />        
					</p>
				</div>
				</form>
			</div> 
		{/if}
		</div>
		</div>
	{/if}
  </div>
</body>
</html>