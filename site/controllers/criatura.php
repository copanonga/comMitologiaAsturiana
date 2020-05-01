<?php
defined('_JEXEC') or die;

class mitologiaasturianaControllercriatura extends JControllerForm {
	
    public function delete($key = null) {
        
        $jinput = JFactory::getApplication()->input;
        $data = $jinput->post->getArray(array());
        $model = $this->getModel('criatura');
        
        //Si en la vista lleva el id se puede obtener a partir de data
        $mensajesDeBorrado =  $model->delete($data["jform"]["id"]);
        
        //Si la vista no lo tiene, se obtiene de la variable get de la url
        //$mensajesDeBorrado =  $model->delete(JFactory::getApplication()->input->get->get('id'));
        
        $link = "index.php?option=com_mitologiaasturiana&view=criaturas";
        $this->setRedirect($link, $mensajesDeBorrado);
        
    }
    
    /*
     
     Se pueden sobreescribir los métodos. Y en el modelo se gestionan las consultas.
       
    public function save($key = null) {
        
    }
    
    public function save2new($key = null) {
        
    }
     */
    
}