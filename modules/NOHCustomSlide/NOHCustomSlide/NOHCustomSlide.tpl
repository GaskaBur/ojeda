<div class="oj-slide large-12 columns row">
  <!-- Orbit Container -->
  
  <script type="text/javascript" src="/modules/NOHCustomSlide/js/jquery.js"></script>
  <script type="text/javascript" src="/modules/NOHCustomSlide/js/jquery.innerfade.js"></script>
  <script type="text/javascript">
	   $(document).ready(
			function(){
				$('ul#slidefade').innerfade({
					speed: 1000,
					timeout: 6000,
					type: 'sequence',
					containerheight: '220px'
				});
		});
  </script>

  <div class="orbit-container">
    <ul id="slidefade" class="orbit-slides-container" >
        {foreach key=k item=i from=$diapositivas}
          <li>
            <div class="large-8 columns">
               <a href="{$i['url']}" title="{$i['url_text']}">
                  <img src="{$i['img_url']}">
                </a>
            </div>
            <div class="large-4 columns">
                <h3><a href="{$i['url']}" title="{$i['url_text']}">{$i['title']}</a></h3>
                <p>{$i['description']}</p>
            </div>
          <!--<div class="orbit-caption">...</div>-->
          </li> 
        {/foreach} 
      </ul>
    </div>
</div>	

