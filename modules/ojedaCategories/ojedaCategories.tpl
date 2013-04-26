
{if isset($OjedaCategory)}
<div class="row oj-menu large-12 columns">
    <div class="oj-cat large-4 columns panel callout oj-vinoteca">
    	<img src="{$img_cat_dir}{$OjedaCategory}.jpg" alt="">
        <h3>{$OjedaCategoryName}</h3>
    </div>
    <nav class="oj-main-nav large-8 columns ">
       <ul class="nav-bar">
           	{foreach from=$categories item=cat}				
					<li {if $cat['cat']['id_category'] == $OjedaCategory}class="active"{/if} id="ojedaCat_{$cat['cat']['id_category']}">
						<a title="" href="{$link->getCategoryLink($cat['cat']['id_category'])}" class="large-4 columns"><span>{$cat['cat']['name']}</span></a>
						{if $cat['cat']['subCat']|@count > 0 }
							<ul class="oj-main-nav2 active" {if $cat['cat']['id_category'] == $OjedaCategory}style="display:block;"{/if}>
							{foreach from=$cat['cat']['subCat'] item=subcat}
								{if $subcat['id_category'] == $OjedaCategory}
									 <script>
										document.getElementById("ojedaCat_{$cat['cat']['id_category']}").setAttribute('class','active');
									</script>
								{/if}

							  	<li {if $subcat['id_category'] == $OjedaCategory}class="active"{/if}><a title="" href="{$link->getCategoryLink($subcat['id_category'])}"><span>{$subcat['name']}</span></a></li>
							{/foreach}
							</ul>
						{/if}
					</li>				
			{/foreach}            
        </ul><!-- nav-bar -->
        <div class="oj-cattext">Elige una de las categorías para descubrir todos los productos gourment que Ojeda ofrece</div>
    </nav>
</div>
{else}
<div class="oj-menu row large-12 columns">
	<div class="oj-cat large-4 columns panel callout">
		<h3>Categorías Delicatessen »</h3>
	</div>

	<nav class="oj-main-nav large-8 columns ">
	    <ul class="nav-bar">
	    	{foreach from=$categories item=cat}
				
					<li><a title="" href="{$link->getCategoryLink($cat['cat']['id_category'])}" class="large-4 columns"><span>{$cat['cat']['name']}</span></a></li>
					{if $cat['cat']['subCat']|@count > 0 }
						<ul class="oj-main-nav2">
						{foreach from=$cat['cat']['subCat'] item=subcat}
						  	<li class=""><a title="" href="#"><span>{$subcat['name']}</span></a></li>
						{/foreach}
						</ul>
					{/if}
				
			{/foreach}
	    </ul><!-- nav-bar -->
	    <div class="oj-cattext">Elige una de las categorías para descubrir todos los productos gourment que Ojeda ofrece</div>
	</nav><!-- sp-main-nav -->

</div>
{/if}