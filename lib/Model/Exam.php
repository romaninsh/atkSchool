<?php

class Model_Exam  extends Model_Table
{
    
    var $table='exam_master';
    function init()
    {
        parent::init();
        $this->addField('name');
        
        
                
    }
}
?>
