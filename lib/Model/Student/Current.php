<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Student_Current extends Model_Student {
    function init(){
        parent::init();
        $this->hasOne('Session_Current','student.session_id','session_master.id');
        $this->hasOne('Class','student.class_id','class_master.id');
    }
}
