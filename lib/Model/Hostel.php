<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Hostel extends Model_Table
{
    
    var $table='hostel_master';
    function init()
    {
        parent::init();
        $this->addField('building_name');
        
     
        
        
                
    }
}
?>
