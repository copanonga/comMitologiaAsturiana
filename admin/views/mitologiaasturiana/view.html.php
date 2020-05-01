<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class mitologiaasturianaViewmitologiaasturiana extends JViewLegacy
{
    function display($tpl = null)
    {
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }
        
        $this->addToolbar();
 
        parent::display($tpl);
    }
    
    protected function addToolbar()
    {

        $bar = JToolBar::getInstance('toolbar');
        JToolbarHelper::title(JText::_('COM_MITOLOGIAASTURIANA'), 'generic.png');
        JToolBarHelper::back(); 
        
    }
    
}