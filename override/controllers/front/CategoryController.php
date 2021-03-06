<?php

class CategoryController extends CategoryControllerCore
{
	/**
	 * Initialize category controller
	 * @see FrontController::init()
	 */
	public function init()
	{
		// Get category ID
		$id_category = (int)Tools::getValue('id_category');
		if (!$id_category || !Validate::isUnsignedId($id_category))
			$this->errors[] = Tools::displayError('Missing category ID');

		// Instantiate category
		$this->category = new Category($id_category, $this->context->language->id);
		global $smarty;
		$this->context->smarty->assign(array("OjedaCategory" => $id_category));
		$this->context->smarty->assign(array("OjedaCategoryName" => $this->category->name));

		parent::init();
		//check if the category is active and return 404 error if is disable.
		if (!$this->category->active)
		{
			header('HTTP/1.1 404 Not Found');
			header('Status: 404 Not Found');
		}
		//check if category can be accessible by current customer and return 403 if not
		if (!$this->category->checkAccess($this->context->customer->id))
		{
			header('HTTP/1.1 403 Forbidden');
			header('Status: 403 Forbidden');
			$this->errors[] = Tools::displayError('You do not have access to this category.');
			$this->customer_access = false;
		}
	}
}

