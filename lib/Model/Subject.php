<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Subject extends Model_Table {

    var $table = 'subject_master';

    function init() 
    {
    
        parent::init();
        $this->addField('name')->mandatory('subject can not be blank');
        $this->addField('code');
        $this->addField('max_marks')->type('int');
        $this->addField('pass_marks')->type('int');

        $this->hasMany('SubjectClassMap','subject_id');
        

    }
}
?>
