{* modules_set.tpl *}
{load_presentation_object filename="modules_set" assign="obj"}

{if $obj->mModules}
	<div id="main" class="grid">
		<div class="modules">
		{* Loop through the set of modules *}
		{section name=i loop=$obj->mModules} 		
			<div class="album">
				<div class="image">     
					<img src="./images/{$obj->mModules[i].module_image}" alt="{$obj->mModules[i].module_title}" />
					<div class="albumdetails">
						<span class="albumtitle">{$obj->mModules[i].module_title}</span>
						<span class="artist">{$obj->mModules[i].module_leader}</span>
					</div>
				</div>				
			</div>           
		{/section}
		</div>
		{* End modules set *}
	</div>
{/if}