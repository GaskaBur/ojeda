		
            </div><!-- center-column -->
            
            <footer class="oj-footer1 large-12 columns">
                <!--<div class="large-12 column">-->
                    <div class="large-4 column panel oj-fav"><span class="ribete"></span>
                        {$HOOK_OJEDA_BESTSELLERS}	            	
                    </div>
                    
                    <div class="large-4 column panel oj-prom"><span class="ribete"></span>
                        {$HOOK_OJEDA_PROMOTIONS}
                    </div>
                    <div class="large-4 column panel oj-bur"><span class="ribete"></span>
                        {$HOOK_OJEDA_CUSTOM_LIST}                        
                    </div>
<!--                </div>	    
-->            </footer>
    
            <footer class="oj-footer2 large-12 columns">
                <div class="large-8 columns">· 
                    <a title="Quiénes somos" href="{$base_dir}" >Inicio</a> · 
                    <a title="Condiciones de venta" href="{$link->getCMSLink('3')}">Condiciones de venta</a> ·  
                    <a title="Conctato" href="{$link->getPageLink('contact')}">Contacto</a> ·  
                    <a title="Aviso Legal" href="{$link->getCMSLink('2')}">Aviso legal</a> ·  
                    <a title="Política de privacidad" href="{$link->getCMSLink('6')}">Política de privacidad</a> · 
                </div>
                <div class="large-4 columns">
                 <a class="confianza" href="https://www.confianzaonline.es/empresas/delicatessenojeda.htm" target="_blank"><img src="https://www.confianzaonline.es/sellopequeno.gif" alt="Entidad adherida a Confianza Online" border="0"></a>
                 <span>Medios de pago</span>  </div>
                <br />
                
            </footer>
    <!--		$HOOK_FOOTER}  -->
    
    	</div><!-- oj-main-content -->
    
        <div class="oj-pie large-12 columns">
            <p>Copyright 2013 · Delicatessen Ojeda S.A. · C/ Vitoria 5 - 09004 Burgos · Telf.: +34 947 20 48 32</p>
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
</body>
</html>
