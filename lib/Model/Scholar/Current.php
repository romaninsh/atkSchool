<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Scholar_Current extends Model_Scholar {

    function init() {
        parent::init();
        // $this->hasOne('Student_Current','scholars_master.id','student.scholar_id');
        $st = $this->join('student.scholar_id');
        $st->addField('isScholared')->type('boolean');
        $st->hasOne('Class', 'class_id');
        $st->hasOne('Session_Current', 'session_id');
        $this->addCondition('session_id', $this->add('Model_Session_Current')->dsql()->field('id'));
    }

}

