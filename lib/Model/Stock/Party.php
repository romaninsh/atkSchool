<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Stock_Party extends Model_Table
{
    
    var $table='party_master';
    function init()
    {
        parent::init();
        $this->addField('party_name');
        $this->addField('contact');
        $this->addField('address');
        
 
     
        
        
                
    }
}
?>
