<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Exam_Result extends Model_Table
{
    
    var $table='result_master';
    function init()
    {
        parent::init();
        $this->addField('marks')->type('int');
        $this->addField('result')->type('boolean');
        
                
    }
}
?>
