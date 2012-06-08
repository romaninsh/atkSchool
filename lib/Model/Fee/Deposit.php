<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Fee_Deposit extends Model_Table
{
    
    var $table='fee_deposit_master';
    function init()
    {
        parent::init();
        $this->addField('due')->type('int');
        $this->addField('paid')->type('int');
        $this->addField('due_date')->type('date');
        $this->addField('deposit_date')->type('date');
        
                
    }
}
?>
