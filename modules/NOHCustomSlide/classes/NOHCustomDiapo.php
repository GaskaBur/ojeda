<?php

class NOHCustomDiapo extends ObjectModel {

  public $img_url;
  public $active = true;
  public $img_alt;
  public $img_title;
  public $title;
  public $description;
  public $url;
  public $orden;  	
  public $url_text;
  
  public static $definition = 
    array (
	   'table' => 'nohCustomSlide',
	   'primary' => 'id_nohCustomSlide',
	   'fields' => array(
	   			'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
	   			'img_url' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true, 'size' => 500),
				'img_alt' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 200),
				'img_title' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 200),
				'title' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true, 'size' => 500),
				'description' => array('type' => self::TYPE_HTML, 'validate' => 'isString', 'size' => 99999),
				'url' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true, 'size' => 500),
				'orden' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => false),
	   			'url_text' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 200)
		));
		
	public static function getQuery($where = NULL,$limit = NULL,$order = NULL)
	{		
		$sql = 'SELECT * ';
		$sql.= 'FROM '._DB_PREFIX_.'nohCustomSlide ';
		if ($where != NULL)
			$sql.= $where;
		if ($limit != NULL)
			$sql.= $limit;
		if 	($order != NULL)
			$sql .= " ORDER BY ".$order;
		$result =  Db::getInstance()->ExecuteS($sql);
		return $result;
	}
		
}