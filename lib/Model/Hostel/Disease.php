<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Hostel_Disease extends Model_Table
{
    
    var $table='disease_master';
    function init()
    {
        parent::init();
        $this->addField('disease');
        $this->addField('report_date')->type('date');
        $this->addField('treatment');
        $this->addField('treatment_date')->type('date');
        
        
     
        
        
                
    }
}
?>
