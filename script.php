<?php
defined('_JEXEC') or die;

class com_mitologiaasturianaInstallerScript
{
    
    function install($parent)
    {
        $parent->getParent()->setRedirectURL('index.php?option=com_mitologiaasturiana');
    }
    
    function uninstall($parent)
    {
        echo '<p>' . JText::_('COM_MITOLOGIAASTURIANA_UNINSTALL_TEXT') . '</p>';
    }
    
    function update($parent)
    {
        echo '<p>' . JText::_('COM_MITOLOGIAASTURIANA_UPDATE_TEXT') . '</p>';
    }
    
    function preflight($type, $parent)
    {
        echo '<p>' . JText::_('COM_MITOLOGIAASTURIANA_PREFLIGHT_' . $type . '_TEXT') . '</p>';
    }
    
    function postflight($type, $parent)
    {
        echo '<p>' . JText::_('COM_MITOLOGIAASTURIANA_POSTFLIGHT_' . $type . '_TEXT') . '</p>';
    }
}