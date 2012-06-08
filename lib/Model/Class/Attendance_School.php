<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Class_Attendance extends Model_Table
{
    
    var $table='attendance_school';
    function init()
    {
        parent::init();
        $this->addField('date')->type('date');
        $this->addField('status')->type('boolean');
        
                
    }
}

?>
