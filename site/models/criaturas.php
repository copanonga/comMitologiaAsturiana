<?php
defined('_JEXEC') or die;

class mitologiaasturianaModelcriaturas extends JModelList {
    
    public function __construct($config = array()) { 
            if (empty($config['filter_fields']))
            {
                    $config['filter_fields'] = array(
                            'criatura', 'criatura'
                    );
            }

            parent::__construct($config);
    }

    protected function populateState($ordering = null, $direction = null) {
        
        //$published = $this->getUserStateFromRequest($this->context.'.filter.state', 'filter_state', '', 'string');
        //$this->setState('filter.state', $published);

        //parent::populateState('criatura', 'asc');
        
    }
	
    protected function getListQuery() {

        $db = $this->getDbo();
		
        $query = $db->getQuery(true);

        $query->select(
            $this->getState(
                    'list.select',
                    'a.*'
            )
        );

        $query->from($db->quoteName('#__ma_mitologia_asturiana', 'a'));
        //$query->where($db->quoteName('a.estado') . ' = ' . $db->quote('1'));

        /*$published = $this->getState('filter.state');	
        if (is_numeric($published)) {
            $query->where('a.estado = '.(int) $published);
        } elseif ($published === '') {
            $query->where('(a.estado IN (0, 1))');
        }*/

        $db->setQuery($query);

        return $query;
	
    }	
	
}