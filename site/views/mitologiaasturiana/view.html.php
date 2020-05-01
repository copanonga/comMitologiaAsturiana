<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class mitologiaasturianaViewmitologiaasturiana extends JViewLegacy
{
    
    function display($tpl = null)
    {
        
        //$this->items = $this->get('Items');
        //Funciones::mostrarZona(__CLASS__,__METHOD__,$this->items ,1);
        
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }
        
        parent::display($tpl);
        
    }
    
}