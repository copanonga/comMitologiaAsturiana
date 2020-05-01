<?php
defined('_JEXEC') or die;

class mitologiaasturianaControllermitologiaasturiana extends JControllerAdmin
{
	public function getModel($name = 'mitologiaasturiana', $prefix = 'mitologiaasturianaModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}

} 