{* modules_set.tpl *}
{load_presentation_object filename="modules_set" assign="obj"}

{if $obj->mModules}
	<div id="main" class="grid">
		<div class="modules">
		{* Loop through the set of modules *}
		{section name=i loop=$obj->mModules} 		
			<div class="album">
				<div class="image">
					<a href='?op=Details&module_id={$obj->mModules[i].module_id}' alt='details'>     
					<img src="./images/{$obj->mModules[i].module_image}" alt="{$obj->mModules[i].module_title}" />
					</a>
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
{if count($obj->mModuleListPages) > 0}

<nav>
   <div class='' id='paginationDiv'>
   
      {if $obj->mLinkToPreviousPage}
         <a href="{$obj->mLinkToPreviousPage}">
            &laquo</a>
      {/if}

      {section name=m loop=$obj->mModuleListPages}
         {if $obj->mPage eq $smarty.section.m.index_next}
            <strong>{$smarty.section.m.index_next}</strong>
         {else}
             <a href="{$obj->mModuleListPages[m]}">
                {$smarty.section.m.index_next}</a>
         {/if}
      {/section}

      {if $obj->mLinkToNextPage}
          <a href="{$obj->mLinkToNextPage}">&raquo</a>
      {/if}
      
   </div>
   </nav>
{/if}