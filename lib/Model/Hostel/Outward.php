<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Hostel_Outwards extends Model_Table
{
    
    var $table='hosteller_outward';
    function init()
    {
        parent::init();
        $this->addField('date')->type('date');
        $this->addField('direction');
        $this->addField('withid')->type('date');
        $this->addField('purpose');
        
     
        
        
                
    }
}
?>
