<?php
defined('_JEXEC') or die;

$canDo      = JHelperContent::getActions('com_mitologiaasturiana');

?>

<h1><?php echo JText::_( 'COM_MITOLOGIAASTURIANA' );?></h1>

<?php if ($canDo->get('core.create') || $canDo->get('core.delete')) : ?>
    <div class="page-header-tab">
        <div class="col-12 pl-0 pr-0">
            <div class="row">

                <div class="col-sm-12 text-md-right"> 
	            
                    <form action="" 
                        method="post" 
                        name="adminFormBarra" 
                        id="adminFormBarra">
                        			            
                        <div class="d-inline-flex align-items-center py-2">

                            <?php if ($canDo->get('core.create')) : ?>
                            <button 
                                type="submit" 
                                class="btn d-flex align-items-center" 
                                >

                                    <i class="text-primary fa fa-plus-circle mr-1" aria-hidden="true"></i>
                                    <span class="text-left font-weight-medium d-md-flex d-none" 
                                          style="text-transform: none;">
                                        <?php echo JText::_('COM_MITOLOGIAASTURIANA_NUEVA_CRIATURA') ?>
                                    </span>
                            </button>
                            <?php endif ?>

                        </div>
                        
                        <input type="hidden" 
                               name="task" 
                               value="criatura.add" />
                        <?php echo JHtml::_('form.token'); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<div class="row">
    
    <div class="col-12">
    
        <div class="card mt-3" id="j-main-container">
            <div class="card-body">

                <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title" style="text-transform: none"><?php echo JText::_('COM_MITOLOGIAASTURIANA');?></h4>
                </div>

                <?php if (empty($this->items)) : ?>
                
                    <div class="alert alert-info">
                            <?php echo JText::_('COM_MITOLOGIAASTURIANA_NO_HAY_RESULTADOS');?>
                    </div>

                <?php else : ?>

                    <table class="table">
                    
                        <thead>						

                            <tr>

                                <th width="4%" class="bg-secondary text-white border border-white text-center">
                                    <?php echo JText::_( 'COM_MA_MITOLOGIAASTURIANA_ESTADO' ) ?>
                                </th>

                                <th class="bg-secondary text-white border border-white">
                                    <?php echo JText::_( 'COM_MA_MITOLOGIAASTURIANA_CRIATURA' ) ?>
                                </th>

                                <th class="bg-secondary text-white border border-white">
                                    <?php echo JText::_('COM_MA_MITOLOGIAASTURIANA_DESCRIPCION'); ?>
                                </th>
                                
                                <th class="bg-secondary text-white border border-white">
                                    <?php echo JText::_('COM_MA_MITOLOGIAASTURIANA_ANOTACIONES'); ?>
                                </th>								

                            </tr>
                            
                        </thead>

                        <tfoot>
                            <tr>
                                <td colspan="6">
                                        <?php echo $this->pagination->getListFooter(); ?>
                                </td>
                            </tr>
                        </tfoot>

                        <tbody>
                        
                            <?php foreach ($this->items as $i => $item) : ?>
                            
                                    <tr>
                                    
                                        <td class="text-center">
                                        
                                            <?php echo $item->estado == '1' ? '<i class="text-success fa fa-check" aria-hidden="true"></i>' : '<i class="text-danger fa fa-times-circle-o" aria-hidden="true"></i>' ?>
                                                
                                        </td>
                                        
                                        <td>
                                            <?php echo $item->criatura ?>
                                        </td>									
                                        
                                        <td>
                                            <?php echo $item->descripcion ?>
                                        </td>	
                        
                                        <td>
                                            <?php echo $item->anotaciones ?>
                                        </td>									

                                    </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>

                <?php endif ?>    		        
    		        
            </div>
        </div>
    </div>
    
</div>