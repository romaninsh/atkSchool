<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Exam_Result extends Model_Table
{
    
    var $table='exam_timetable';
    function init()
    {
        parent::init();
        $this->addField('date')->type('date');
        $this->addField('time')->type('time');
        
                
    }
}
?>
