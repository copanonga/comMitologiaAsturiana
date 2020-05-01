<?php
defined('_JEXEC') or die;

class mitologiaasturianaController extends JControllerLegacy
{
    
    public function display($cachable = false, $urlparams = false)
    {

        parent::display();
        return $this;

    }
    
    public function execute()
    {
        
        $task = JFactory::getApplication()->input->get('task');
        try
        {
            parent::execute($task);
        }
        catch(Exception $e)
        {
            echo new JResponseJson($e);
        }
        
    }
        
}