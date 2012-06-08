<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Scholar_Current extends Model_Scholar {
    function init(){
        parent::init();
        $this->hasOne('Student_Current');
    }
}