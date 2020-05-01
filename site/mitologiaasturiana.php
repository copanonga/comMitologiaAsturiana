<?php

defined('_JEXEC') or die;
require_once 'funciones.php';

JHtml::_('bootstrap.framework');

if (!JFactory::getUser()->authorise('core.manage', 'com_mitologiaasturiana'))
{
    return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$jinput = JFactory::getApplication()->input;
$jinput->post->set( 'DEBUG', "SI");
$jinput->post->set( 'ACTIVAR_DEBUG', "SI");

$controller	= JControllerLegacy::getInstance('mitologiaasturiana');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();