<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class mitologiaasturianaViewcriaturas extends JViewLegacy
{
    
    protected $items;
    protected $state;
    protected $pagination;
        
    function display($tpl = null)
    {
        
        $this->state        = $this->get('State');
        $this->items        = $this->get('Items');
        $this->pagination	= $this->get('Pagination');
        
        //Funciones::mostrarZona(__CLASS__,__METHOD__,$this->items ,1);
        
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }
        
        parent::display($tpl);
        
    }
    
}