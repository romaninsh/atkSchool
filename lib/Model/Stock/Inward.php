<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Stock_Inward extends Model_Table
{
    
    var $table='stationary_inward';
    function init()
    {
        parent::init();
        $this->addField('date')->type('date');
        $this->addField('cost_rate')->type('int');
        $this->addField('sale_rate')->type('int');
        $this->addField('quantity')->type('int');
        $this->addField('party');
 
     
        
        
                
    }
}
?>
