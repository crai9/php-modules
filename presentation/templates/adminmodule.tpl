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
				<h3>Update Album</h3>
			{else}
				<h3>Add New Album</h3>					
			{/if}		
			<form method="post" action="admin.php">
			{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
			<div>
				<p>
					<label for="new_album_title">Title:</label><br />
					<input type="text" name="new_album_title" value="{$obj->mAlbumTitle}" size="40" />
				</p>
				<p>
					<label for="new_artist">Artist:</label><br />            
					<input type="text" name="new_artist" value="{$obj->mArtist}" size="40" />
				</p>
				<p>
					<label for="new_release_date">Release Date:</label><br /> 			
					<input type="text" name="new_release_date" value="{$obj->mReleaseDate}" size="10" />
				</p>
				<p>
					<label for="new_image">Image:</label><br />			
					<input type="text" name="new_image" value="{$obj->mImage}" size="40" />
				</p>
				<p>
					<label for="new_date_bought">Date Bought:</label><br />				
					<input type="text" name="new_date_bought" value="{$obj->mDateBought}" size="10" />
				</p>
				<p>
					<label for="new_category">Category:</label><br />			
					<input type="text" name="new_category" value="{$obj->mCategory}" size="10" />
				</p>
				<p>
					<input type="hidden" name="album_id" value="{$obj->mAlbumID}" />
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
		{if $obj->mArtists}
			<div id='rightItemTemplate'>
				<h3>Find Album to Update</h3>
				<form method="post" action="admin.php">
				<div>
					<p>
						<select name="artists">
							<option>Select Artist</option>
							{* Loop through the list of artists *}
							{section name=i loop=$obj->mArtists}
								{* Generate a new artist in the list *}
								<option value="{$obj->mArtists[i].artist}">{$obj->mArtists[i].artist}</option>
							{/section}        
						</select>
            				</p>
					<p>
						<input type="submit" name="submit_select_artist" value="Select Artist" />        
					</p>
				</div>
				</form>
			</div> 
		{/if}
	{/if}
  </div>
</body>
</html>