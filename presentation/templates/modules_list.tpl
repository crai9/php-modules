{* modules_list.tpl *}
{load_presentation_object filename="modules_list" assign="obj"}
<div>
	<h2>Modules</h2>
	{if $obj->mModules}
		<ul>
		{* Loop through the list of modules *}
		{section name=i loop=$obj->mModules}
		<li>
			{* Generate a new module in the list *}		
				<a href='?op=Details&module_id={$obj->mModules[i].module_id}'>{$obj->mModules[i].module_title}
				</a>
		</li>
		{/section}
		</ul>
		{* End modules list *}
	{/if}
</div>



