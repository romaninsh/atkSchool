<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Hostel_Rooms extends Model_Table
{
    
    var $table='rooms';
    function init()
    {
        parent::init();
        $this->addField('room_no')->type('int');
        $this->addField('capacity')->type('int');
     
        
        
                
    }
}
?>
