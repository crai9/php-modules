{* module_leader_list.tpl *}
{load_presentation_object filename="module_leader_list" assign="obj"}

{if $obj->mLeaders}
	<table id='GridView1' cellspacing='0' cellpadding='4' border='0' width='800'>
	<thead>
	<tr style='color:White;background-color:Red;font-weight:bold;font-size:large;'>
		<th scope='col'>Leaders</th>
		<th scope='col'>Modules</th>
	</tr>
	</thead>
	<tbody>
	{* Loop through the list of leaders *}
	{section name=i loop=$obj->mLeaders}
	<tr class="{cycle values="odd,even"}">
		{* Generate a new artist in the list *}
		<td>
            {$obj->mLeaders[i].module_leader}
		</td>
        <td>
        	<table>
            <tr>
            	{section name=j loop=$obj->mLeaderModules[i]}
                <td>
                    {if $obj->mLeaderModules[i][j].module_image neq ""}
						<div class="albumimage">
            			<a href="?op=Details&module_id={$obj->mLeaderModules[i][j].module_id}">      
							<img src="./images/{$obj->mLeaderModules[i][j].module_image}"
                            	alt="{$obj->mLeaderModules[i][j].module_title}" />
            			</a>
                    	<br />
						</div>
					{/if}
                </td>
                {/section}
            </tr>
            </table>
        </td>
	</tr>
	{/section}
	</tbody>
	</table>
{* End module_leader_list *}
{/if}


