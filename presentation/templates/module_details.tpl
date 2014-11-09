{* module_details.tpl *}
{load_presentation_object filename="module_details" assign="obj"}

{if $obj->mModule}
<div>
    <div id="album">
		<h2>{$obj->mModule.module_title}</h2>
		<div id='leftItemTemplate'>
			<p><img width='300px'src='./images/{$obj->mModule.module_image}' alt='{$obj->mModule.module_title} Module Image' /></p>
			<h3>Module's Category</h3>
			<h4>{$obj->mModule.module_category}</h4>
			<h3>Module's Leader</h3>
			<h4>{$obj->mModule.module_leader}</h4>
			
		</div>
		<div id='rightItemTemplate'>
		<h3>Module's description</h3>
			<p>{$obj->mModule.module_description}</p>
			{if $obj->mKeywords}
				<div id="tracks">
				<h3>Module's keyword</h3>
					<ul>
						{* Loop through the list of keywords *}
						{section name=i loop=$obj->mKeywords}
						<li>
							{* Generate a new keyword in the list *}
							{$obj->mKeywords[i].keyword_term}
						</li>
						{/section}        
					</ul>
				</div>
			{* End tracks list *}
			{/if}
			
			<br>
			<br>
		</div>
	</div>

{* End album *}
</div>
{/if}   

 