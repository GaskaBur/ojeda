		
            </div><!-- center-column -->
            
            <footer class="oj-footer1 large-12 columns row">                
                <div class="large-4 columns">
                    <div class="panel oj-fav">
                    <span class="ribete"></span>
                    {$HOOK_OJEDA_CUSTOM_LIST_2}
                    </div>	            	
                </div>
                
                <div class="large-4 columns">
                    <div class="panel oj-prom">
                    <span class="ribete"></span>
                    {$HOOK_OJEDA_CUSTOM_LIST}
                    </div>
                </div>
                <div class="large-4 columns">
                    <div class="panel oj-bur">
                    <span class="ribete"></span>
                    {$HOOK_OJEDA_CUSTOM_LIST_3}
                    </div>                       
                </div>
            </footer>
    
            <footer class="oj-footer2 row collapse">
                <nav class="large-8 columns">· <a title="Quiénes somos" href="{$base_dir}" >Inicio</a> · 
                    <a title="Condiciones de venta" href="{$link->getCMSLink('3')}">Condiciones de venta</a> ·  
                    <a title="Conctato" href="{$link->getPageLink('contact')}">Contacto</a> ·  
                    <a title="Aviso Legal" href="{$link->getCMSLink('2')}">Aviso legal</a> ·  
                    <a title="Política de privacidad" href="{$link->getCMSLink('6')}">Política de privacidad</a> · 
                </nav>
                <div class="large-4 columns">
                 <a class="confianza" href="https://www.confianzaonline.es/empresas/delicatessenojeda.htm" target="_blank"><img src="https://www.confianzaonline.es/sellopequeno.gif" alt="Entidad adherida a Confianza Online" border="0"></a>
                 <span>Medios de pago</span>
                 </div>              
                
            </footer>
    <!--		$HOOK_FOOTER}  -->
    
    	</div><!-- oj-main-content -->
    
        <div class="oj-pie">
            <p>Copyright 2013 · Delicatessen Ojeda S.A. · C/ Vitoria 5 - 09004 Burgos · Telf.: +34 947 20 48 32 <span><a href="http://innovanity.com" title="Innovanity | Desarrollo y diseño de tiendas online" target="_blank">Innovanity | Desarrollo y diseño de tiendas online</a></span>
            <br /><br />
            <a class="grupo" title="Grupo Ojeda" href="http://www.grupojeda.com/" target="_blank">Grupo OJEDA </a> » 
            <a class="grupo" title="Restaurante Ojeda" href="http://www.restauranteojeda.com/" target="_blank"> Restaurante OJEDA</a> · 
            <a class="grupo" title="Apartamentos Ojeda" href="http://www.apartamentosojeda.com/" target="_blank">Apartamentos OJEDA</a> ·
            <a class="grupo" title="Almirante Bonifaz Hotel" href="http://www.almirantebonifaz.com/" target="_blank">Almirante Bonifaz Hotel</a></p>
        </div>
        
	</div><!-- oj-main-container -->
</div> <!-- oj-wrap -->
<script>
  document.write('<script src=' +
  ('__proto__' in {} ? '{$js_dir}/vendor/zepto' : '{$js_dir}/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="{$js_dir}foundation.min.js"></script>
  <!--
  
  <script src="{$js_dir}/foundation/foundation.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.dropdown.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.placeholder.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.forms.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.alerts.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.magellan.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.reveal.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.tooltips.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.clearing.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.cookie.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.joyride.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.orbit.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.section.js"></script>
  
  <script src="{$js_dir}/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>


  <!---Google Analytics--->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34965181-27']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
