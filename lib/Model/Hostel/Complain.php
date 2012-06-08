<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Hostel_Complain extends Model_Table
{
    
    var $table='complain_master';
    function init()
    {
        parent::init();
        $this->addField('complain_text');
        $this->addField('date')->type('date');
        $this->addField('action_taken');
        $this->addField('action_date')->type('date');
        $this->addField('remarks');
        
        
     
        
        
                
    }
}
?>
