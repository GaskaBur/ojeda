<body {if isset($page_name)}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if} class="{if $hide_left_column}hide-left-column{/if} {if $hide_right_column}hide-right-column{/if} {if $content_only} content_only {/if}">

<div class="oj-wrap banda">
	<div class="oj-main-container">
        <header class="oj-main-header row">

            <div id="header" class="grid_9 alpha omega">
                <div class="oj-branding large-9 columns grid_9 alpha omega">
                    <div class="oj-logo">
                        <h1><a href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">delicatessenojeda.com</a></h1>
                    </div>
                    <h2>La mejor selección de <span>productos gourmet</span></h2>
                    <div class="oj-grupo">
                    	<a href="http://grupojeda.com" title="Grupo Ojeda" target="_blank">Grupo Ojeda</a>
                    </div>
                </div><!-- branding -->   
                <div id="header_right" class="grid_6 omega">
    				{$HOOK_TOP}
    			</div> 
            </div>


        </header> <!-- main-header --> 

        {$HOOK_MENU_TOP_OJEDA}
        <div class="oj-main-content row">
            <div id="center_column">
                {$HOOK_MENU_OJEDA_CATEGORIES}
                <div class="clear"></div>