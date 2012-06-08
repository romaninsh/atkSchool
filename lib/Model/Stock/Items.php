<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Stock_Item extends Model_Table
{
    
    var $table='item_master';
    function init()
    {
        parent::init();
        $this->addField('name');
 
     
        
        
                
    }
}
?>
