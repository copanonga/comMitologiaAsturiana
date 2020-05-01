<?php

defined('_JEXEC') or die;

class mitologiaasturianaModelcriatura extends JModelAdmin {
	
    protected $text_prefix = 'COM_MITOLOGIAASTURIANA';

    public function getTable($type = 'criatura', $prefix = 'mitologiaasturianaTable', $config = array()) {
        
        return JTable::getInstance($type, $prefix, $config);
        
    }

    public function getForm($data = array(), $loadData = true) {
        
        $app = JFactory::getApplication();

        $form = $this->loadForm('com_mitologiaasturiana.criatura', 'criatura', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form))
        {
                return false;
        }

        return $form;
        
    }

    protected function loadFormData() {
        
        $data = JFactory::getApplication()->getUserState('com_mitologiaasturiana.edit.criatura.data', array());

        if (empty($data))
        {
                $data = $this->getItem();
        }

        return $data;
        
    }

    protected function prepareTable($table) {
        
        $config = JFactory::getConfig(); 
        $user   = JFactory::getUser();
        $offset = $config->get('offset');    

        $fecha  = JFactory::getDate('now', $offset);

        $table->fecha_modificacion = $fecha->toSql($local = 'true');
        $table->anotaciones = "Texto de anotaciones";

    }

}
