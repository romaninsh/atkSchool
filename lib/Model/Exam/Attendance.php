<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Exam_Attendance extends Model_Table
{
    
    var $table='attendance_exam';
    function init()
    {
        parent::init();
        $this->addField('date')->type('date');
        $this->addField('status')->type('boolean');
        
        
                
    }
}
?>
