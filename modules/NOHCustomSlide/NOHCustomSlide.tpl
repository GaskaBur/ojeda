<div class="oj-slide row large-12 columns">
  <!-- Orbit Container -->
  <div class="orbit-container ">
    <ul data-orbit="" class="orbit-slides-container" >
        {foreach key=k item=i from=$diapositivas}
          <li>
            <div class="large-8 columns">
               <a href="{$i['url']}" title="{$i['url_text']}">
                  <img src="{$i['img_url']}">
                </a>
            </div>
            <div class="large-4 columns">
                <h3><a href="{$i['url']}" title="{$i['url_text']}">{$i['title']}</a></h3>
                {$i['description']}
            </div>
          <!--<div class="orbit-caption">...</div>-->
          </li> 
        {/foreach} 
      </ul>
    </div>
</div>	

