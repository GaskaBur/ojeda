<?php

if ( !defined( '_PS_VERSION_' ) )
  exit;
  
class NOHCustomList extends Module
{
		
	public function __construct()
	{
		$this->name = 'NOHCustomList';
		$this->tab = 'others';
		$this->author = 'Sergio Gil Perez';
		$this->version = '1.0';	
		$this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');	
		parent::__construct();
		
		$this->displayName = $this->l('NOHCustomList');
		$this->description = $this->l('Lista de productos personalizadas | created by Noises Of Hill');
	}
	
	/*
	Module instalation, create tables, tabs and hooks
	*/
	public function install()
	{	 	
        Configuration::updateValue('NOHCL_titulo', '');
        return (parent::install() AND $this->registerHook('displayHeader') 
		 		&& $this->registerHook('NOHCustomList')
		 	);
	}

	

	public function hookNOHCustomList()
	{				
		/*
		$categories = array();
		foreach (Category::getHomeCategories(Context::getContext()->language->id) as $key ) {
			$c = array();
			$c['cat'] = $key;
			$c['cat']['subCat'] = Category::getChildren($key['id_category'],Context::getContext()->language->id);
			$categories[]= $c;
		};

		//var_dump($categories);
		//print_r($categories);
		global $smarty;
		$this->context->smarty->assign(array("categories" => $categories));
		return $this->display(__FILE__, 'ojedaCategories.tpl');
		*/
	}
	
	public function uninstall()
	{
		Configuration::deleteByName('NOHCL_titulo');
		return (parent::uninstall());
	}  

	public function getContent()
	{
		$output = null;
 
		if (Tools::isSubmit('submit'.$this->name))
		{
			
				Configuration::updateValue('NOHCL_titulo', Tools::getValue('titulo'));
				$output .= $this->displayConfirmation($this->l('Settings updated'));
			
		}
		return $output.$this->displayForm();

	}
	
	public function displayForm()
	{	
		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
		$fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('Settings'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Título'),
					'name' => 'titulo',
					'size' => 40,
				),
				
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);
		 
		$helper = new HelperForm();
		 
		// Module, token and currentIndex
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		 
		// Language
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;
		 
		// Title and toolbar
		$helper->title = $this->displayName;
		$helper->show_toolbar = true;        // false -> remove toolbar
		$helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
		$helper->submit_action = 'submit'.$this->name;
		$helper->toolbar_btn = array(
			'save' =>
			array(
				'desc' => $this->l('Save'),
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
				'&token='.Tools::getAdminTokenLite('AdminModules'),
			),
			'back' => array(
				'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Back to list')
			)
		);
		 
		// Load current value
		$helper->fields_value['titulo'] = Configuration::get('NOHCL_titulo');
		
		 
		return $helper->generateForm($fields_form);
	}	
	
}
