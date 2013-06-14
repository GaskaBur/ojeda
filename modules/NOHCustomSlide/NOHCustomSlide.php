<?php

include_once(_PS_MODULE_DIR_.'NOHCustomSlide/classes/NOHCustomDiapo.php');

if ( !defined( '_PS_VERSION_' ) )
  exit;
  
class NOHCustomSlide extends Module
{
		
	public function __construct()
	{
		$this->name = 'NOHCustomSlide';
		$this->tab = 'slideshows';
		$this->author = 'Sergio Gil Perez';
		$this->version = '1.0';	
		$this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');	
		parent::__construct();
		
		$this->displayName = $this->l('NoisesOfHill - Custom Slide');
		$this->description = $this->l('Custom Slide | created by Noises Of Hill');		
		
		
        $this->tabClassName = 'AdminNOHCustomSlide';
        $this->tabParentName = 'AdminCatalog';	
				
		$this->lang = $this->context->language->id;
		if ($this->lang > 6) $this->lang = 4;	
	}
	
	/*
	Module instalation, create tables, tabs and hooks
	*/
	public function install()
	{	 	
        if (!$id_tab) {
        	$tab = new Tab();
            $tab->class_name = $this->tabClassName;
            $tab->id_parent = Tab::getIdFromClassName($this->tabParentName);
            $tab->module = $this->name;
            $languages = Language::getLanguages();
            foreach ($languages as $language)
                $tab->name[$language['id_lang']] = $this->displayName;
            $tab->add();
    	}			
		
        $this->createTables();		 
		
		return (parent::install() AND $this->registerHook('displayHeader') 
		 	&& $this->registerHook('displayHome')
		 	&& $this->registerHook('actionAdminSaveBefore')
		 	);
	}

	public function hookActionAdminSaveBefore($params)
	{
		

		$max=1500000;

		$nombreclean=htmlspecialchars('imagen');

		$uploaddir = _PS_MODULE_DIR_."NOHCustomSlide/imagenes/";
		
		$filesize = $_FILES['img_file']['size'];
		$filename = trim($_FILES['img_file']['name']);

		if($filesize < $max)
		{
			if($filesize > 0)
			{
				if((ereg(".jpeg", $filename)) || (ereg(".jpg", $filename))|| (ereg(".png", $filename))|| (ereg(".PNG", $filename)) || (ereg(".gif", $filename)) || (ereg(".JPG", $filename))|| (ereg(".GIF", $filename)))
				{
					$uploadfile = $uploaddir . $filename;
				    if (move_uploaded_file($_FILES['img_file']['tmp_name'], $uploadfile)) {
						$_POST['img_url'] = 'http://'.$_SERVER['SERVER_NAME']._MODULE_DIR_."NOHCustomSlide/imagenes/".$filename;
					} else {
					print("Error de conexi&oacute;n con el servidor.");
					}
				} 
				else 
				{
					print("Sólo se permiten imágenes en formato jpg. y gif., no se ha podido adjuntar.");
				}
			}
			else 
			{
				print("<br><br>Campo vac&iacute;o, no ha seleccionado ninguna imagen");
			}
		}
		else 
		{
			print("<br><br>La imagen que ha intentado adjuntar es mayor de 1.5 Mb, si desea cambie el tamaño del archivo y vuelva a intentarlo.");
		}
		
		

	}

	public function hookDisplayHeader()
	{
		$this->context->controller->addJS(($this->_path).'js/jsStart.js', 'all');
		$this->context->controller->addJS(($this->_path).'js/slides.min.jquery.js', 'all');
		
		
		
		$this->context->controller->addCSS(($this->_path).'css/NOHCustomSlide.css', 'all');
	}

	public function hookDisplayHome()
	{				
		global $smarty;
		$diapositivas = NOHCustomDiapo::getQuery("WHERE active = 1",null,"orden");
		if (count($diapositivas) > 0)
		{
			$this->context->smarty->assign(array("diapositivas" => $diapositivas));
			return $this->display(__FILE__, 'NOHCustomSlide.tpl');
		}
	}
	
	public function uninstall()
	{
		$id_tab = Tab::getIdFromClassName($this->tabClassName);
    	if ($id_tab) {
		     $tab = new Tab($id_tab);
		     $tab->delete();
		}
		$this->destroyTables();
		
		return (parent::uninstall());
	}  
	
	
	
	private function createTables()
	{	
		
		$querySlide = 'CREATE TABLE IF NOT EXISTS '._DB_PREFIX_.'nohCustomSlide (';
		$querySlide.='id_nohCustomSlide int(10) unsigned NOT NULL Key AUTO_INCREMENT,';
		$querySlide.='active tinyint(1) NOT NULL ,';
		$querySlide.='img_url varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , ';
		$querySlide.='img_alt varchar(200)  CHARACTER SET utf8 COLLATE utf8_general_ci NULL , ';
		$querySlide.='img_title varchar(200)  CHARACTER SET utf8 COLLATE utf8_general_ci NULL , ';
		$querySlide.='title varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , ';
		$querySlide.='description varchar(99999) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,';	
		$querySlide.='url varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , ';
		$querySlide.='orden int(10) unsigned NULL ,';
		$querySlide.='url_text varchar(200)  CHARACTER SET utf8 COLLATE utf8_general_ci NULL )';
			
		Db::getInstance()->Execute($querySlide);		
		
	}
	
	private function destroyTables() {		
		$query = 'DROP table '._DB_PREFIX_.'nohCustomSlide';
		Db::getInstance()->Execute($query);
	}	


	
	
	
	
	
	
}