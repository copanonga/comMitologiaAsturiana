<?php
defined('_JEXEC') or die;

class mitologiaasturianaControllercriaturas extends JControllerAdmin
{
	public function getModel($name = 'criaturas', $prefix = 'mitologiaasturianaModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}

} 