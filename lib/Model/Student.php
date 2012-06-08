<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Student extends Model_Table {

    var $table = 'student';

    function init() 
    {
        parent::init();
        $this->addField('roll_no')->type('int')->caption('roll number');
        $this->addField('ishostler')->type('boolean')->defaultValue(false)->caption("Is Hostler");
        $this->hasOne('Scholar','student.scholar_id','id');
   }
}