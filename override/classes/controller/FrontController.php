<?php

class FrontController extends FrontControllerCore
{
	
	public function setMedia()
	{
	    parent::setMedia();
	    Tools::addCSS(_THEME_CSS_DIR_.'normalize.css');
	    Tools::addCSS(_THEME_CSS_DIR_.'app.css');
	    //Tools::addCSS(_THEME_CSS_DIR_.'foundation.css');
	    Tools::addCSS('http://fonts.googleapis.com/css?family=Princess+Sofia');
	    Tools::addCSS('http://fonts.googleapis.com/css?family=Abel');
	    Tools::addJS(_THEME_JS_DIR_.'vendor/custom.modernizr.js');
    
    }

	public function initContent() 
	{
	    parent::initContent();
	    $this->context->smarty->assign(array(
			 "HOOK_MENU_TOP_OJEDA" => Hook::exec('menuTopOjeda'),
		 ));

	    $this->context->smarty->assign(array(
			 "HOOK_MENU_OJEDA_CATEGORIES" => Hook::exec('ojedaCategories'),
		 ));

	    $this->context->smarty->assign(array(
			 "HOOK_OJEDA_BESTSELLERS" => Hook::exec('bestSellers'),
		 ));

	    $this->context->smarty->assign(array(
			 "HOOK_OJEDA_PROMOTIONS" => Hook::exec('productPromotions'),
		 ));
	}
}

