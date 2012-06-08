<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Stock_Issue extends Model_Table
{
    
    var $table='stationary_issue';
    function init()
    {
        parent::init();
        $this->addField('quantity')->type('int');
        $this->addField('rate')->type('int');
        $this->addField('date')->type('date');
        
 
     
        
        
                
    }
}
?>
