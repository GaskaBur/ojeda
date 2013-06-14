<?php

include_once(_PS_MODULE_DIR_.'NOHCustomSlide/classes/NOHCustomDiapo.php');

class AdminNOHCustomSlideController extends AdminController 
{
	public function __construct() {
		$this->_list = array();
    	$this->context = Context::getContext();
    	$this->table = 'nohCustomSlide';
   		$this->className = 'NOHCustomDiapo';
    	$this->fields_list = array(
	    	'id_nohCustomSlide' => array('title' => $this->l('ID'),'width' => 25 ),
	    	'active' => array('title' => $this->l('Activo'),'width' => 'auto',
	    	'width' => 70,
				'active' => 'status',
				'filter_key' => 'a!active',
				'align' => 'center',
				'type' => 'bool',
				'orderby' => true),
	    	'orden' => array('title' => $this->l('Orden'),'width' => 'auto'),
			'title' => array('title' => $this->l('Titulo'),'width' => 'auto'),
			'description' => array('title' => $this->l('Descripción'),'width' => 'auto'),
			'url' => array('title' => $this->l('Enlace'),'width' => 'auto'),		 	
	    	'url_text' => array('title' => $this->l('Texto enlace'),'width' => 'auto'),
	    	'img_url' => array('title' => $this->l('Imagen URL'), 'width' => 'auto'),
			'img_alt' => array('title' => $this->l('Imagen alt'),'width' => 'auto'),
			'img_title' => array('title' => $this->l('Imagen title'),'width' => 'auto'),
	    );

    $this->bulk_actions = 
      array('delete' => array('text' => $this->l('Delete selected'),'confirm' => $this->l('Delete selected items?')),
			'enableSelection' => array('text' => $this->l('Enable selection')),
	    	'disableSelection' => array('text' => $this->l('Disable selection'))
	    	);
    parent::__construct();
  }

  public function renderList() {
    $this->addRowAction($this->l('edit'));
    $this->addRowAction($this->l('delete'));    
    return parent::renderList();
  }

  public function renderForm()
  {
    
    if (isset($_GET['id_nohCustomSlide']))
    {
    	$sql = "SELECT img_url FROM "._DB_PREFIX_."nohCustomSlide WHERE id_nohCustomSlide=".$_GET['id_nohCustomSlide'];
    	$q = DB::getInstance()->executeS($sql);
    	$img =  $q[0]['img_url'];

    }
    $this->fields_form = 
      array(
	    'legend' => array(
			      'title' => $this->l('Noises of Hill | Custom Slide'),
			      ),
	    'input' => array(
				  array(
				   'type' => 'text',
				   'label' => $this->l('Orden'),
				   'name' => 'orden',
				   'size' => 10,
				   'maxlength' => 3,
				   'desc' => $this->l('Orden en que aparecerá este Slide.'),
				   ),	
				 array(
				   'type' => 'text',
				   'label' => $this->l('Titulo'),
				   'name' => 'title',
				   'maxlength' => 500,
				   'size' => 50,
				   'required' => true,
				   'desc' => $this->l('Titulo que aparecerá en la Slide.'),
				   ),
				 array(
				   'type' => 'textarea',
				   'label' => $this->l('Descripción'),
				   'name' => 'description',
				   'cols' => 50,                                     
                   'rows' => 7, 
                   'maxlength' => 99999,
				   'desc' => $this->l('Texto (html) que aparecerá en el Slide'),
				   ),
				 array(
				   'type' => 'text',
				   'label' => $this->l('Pulsa en examinar para cargar una imagen'),
				   'name' => 'img_url',
				   'size' => 100,
				   'required' => true,
				   'desc' => '<img src="'.$img.'"/>',
				   'readonly' => '1',
				   ),
			     array(
				   'type' => 'file',
				   'name' => 'img_file',
				   'desc' => $this->l('La Imagen cambiará al guardar y salir.'),
				   ),
				 array(
					'type' => 'text',
					'label' => $this->l('URL al hacer Click'),
					'name' => 'url',
					'maxlength' => 500,
				    'size' => 50,
					'required' => true,
					'desc' => $this->l('Enlace del elemento del slide'),
					
				),      
			     array(
				   'type' => 'text',
				   'label' => $this->l('Texto del enlace del elemento'),
				   'name' => 'url_text',
				   'size' => 50,
				   'maxlength' => 200,
				   'desc' => $this->l('Texto que aparecerá para seguir el enlace (Si está vacio se muestra enlace)'),
				   ),
			     
				 array(
				   'type' => 'text',
				   'label' => $this->l('Imagen alt'),
				   'name' => 'img_alt',
				   'size' => 50,
				   'maxlength' => 200,
				   'desc' => $this->l('Atributo alt que se mostrará en caso de que el enlace de la imagen este roto o sea incorrecto.'),
				   ), 
				
				 
				 array(
				   'type' => 'text',
				   'label' => $this->l('Imagen title'),
				   'name' => 'img_title',
				   'size' => 50,
				   'maxlength' => 200,
				   'desc' => $this->l('Atributo title de la imagen.'),
				   ), 

				 array(
					'type' => 'radio',
					'label' => $this->l('Activo:'),
					'name' => 'active',
					'required' => false,
					'class' => 't',
					'values' => array(
						array(
							'id' => 'active_on',
							'value' => 1,
							'label' => '<img  src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" />'
						),
						array(
							'id' => 'active_off',
							'value' => 0,
							'label' => '<img  src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" />'
						)
					),
					'desc' => $this->l('Enabled or disabled'),
					),
			     ));

    $this->fields_form['submit'] = 
      array(
	    'title' => $this->l('Save   '),
	    'class' => 'button'
	    );
    return parent::renderForm();
  }
}