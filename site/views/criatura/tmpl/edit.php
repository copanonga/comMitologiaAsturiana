<?php
defined('_JEXEC') or die;

?>

<form action="<?php echo JRoute::_('index.php?option=com_mitologiaasturiana&view=criatura&layout=edit&id='.(int) $this->item->id); ?>" 
      method="post" 
      name="adminForm" 
      id="adminForm" 
      class="form-validate">

    <div class="page-header-tab">
        
        <div class="col-12 pl-0 pr-0 text-md-right">
            
            <div class="d-inline-flex align-items-center py-2">

                <button 
                    type="submit" 
                    class="btn d-flex align-items-center"
                    onclick="Joomla.submitbutton('criatura.save')">
                    <i class="text-primary fa fa-floppy-o mr-1" 
                       aria-hidden="true"></i>
                           <?php echo JText::_('COM_MITOLOGIAASTURIANA_GUARDAR') ?>
                </button>

                <button 
                    type="submit" 
                    class="btn d-flex align-items-center"
                    onclick="Joomla.submitbutton('criatura.save2new')">
                    <i class="text-primary fa fa-plus mr-1" 
                       aria-hidden="true"></i>
                           <?php echo JText::_('COM_MITOLOGIAASTURIANA_GUARDAR_Y_NUEVO') ?>
                </button>							

                <button 
                    type="submit" 
                    class="btn pull-left" 
                    onclick="Joomla.submitbutton('criatura.delete')">
                    <i class="text-primary fa fa-trash mr-1" 
                       aria-hidden="true"></i>
                           <?php echo JText::_('COM_MITOLOGIAASTURIANA_BORRAR') ?>
                </button>
                
                <button 
                    type="submit" 
                    class="btn pull-left" 
                    onclick="Joomla.submitbutton('criatura.cancel')">
                    <i class="text-primary fa fa-times-circle mr-1" 
                       aria-hidden="true"></i>
                           <?php echo JText::_('JCANCEL') ?>
                </button>
                
            </div>
                
        </div>
    </div>

    <div class="card-deck" id="j-main-container">

        <div class="card mt-3">
            
            <div class="card-body">
                
                <h4 class="card-title" style="text-transform: none"><?php echo JText::_('COM_MITOLOGIAASTURIANA_CRIATURA');?></h4>

                <div class="row">

                    <?php echo $this->form->getInput('id'); ?>
                    
                    <div class="form-group col">
                        <?php echo $this->form->getLabel('criatura'); ?>
                        <?php echo $this->form->getInput('criatura'); ?>
                    </div>
                    
                    <div class="form-group col">
                        <?php echo $this->form->getLabel('descripcion'); ?>
                        <?php echo $this->form->getInput('descripcion'); ?>
                    </div>
                    
                    <div class="form-group col">
                        <?php echo $this->form->getLabel('anotaciones'); ?>
                        <?php echo $this->form->getInput('anotaciones'); ?>
                    </div>

                    <div class="form-group col">
                        <?php echo $this->form->getLabel('estado'); ?>
                        <?php echo $this->form->getInput('estado'); ?>
                    </div>

                </div>

            </div>
            
        </div>
 
    </div>
    
    <input type="hidden" name="task" value="" />
    
    <?php echo JHtml::_('form.token'); ?> 
    
</form>