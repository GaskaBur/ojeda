<div class="clear"></div>
<div class="oj-tmenu row">     
    <div class="oj-search large-6 columns">  
    	
			<form method="get" action="{$link->getPageLink('search')}" id="searchbox">
        	<input type="hidden" name="controller" value="search" />
			<input type="hidden" value="position" name="orderby"/>
			<input type="hidden" value="desc" name="orderway"/>
         	<label for="search_query_top"><h5>Buscar</h5></label>
            <input class="input" type="text" id="" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'htmlall':'UTF-8'}{/if}" />
            <input type="submit" name="submit_search" value="Encontrar" class="button" />
		</form> 

    </div>
    <nav class="oj-secondary-nav large-6 columns">         
        <ul class="top-bar">        	
            <li><a title="" href="{$base_dir}">Inicio</a></li>            
            <li><a title="" href="{$link->getCMSLink('4')}">Quiénes somos</a></li>
            <li><a title="" href="#">Blog</a></li>
            <li><a title="" href="{$link->getPageLink('contact')}">Contacto</a></li>
            <li class="tw"><a title="Síguenos en Twitter" href="http://twitter.com/CasaOjedaBurgos" target="_blank"></a></li> 
            <li class="fb"><a title="Síguenos en Facebook" href="https://www.facebook.com/grupojeda" target="_blank"></a></li>           
        </ul>
    </nav> <!-- secondary-nav -->
</div>
