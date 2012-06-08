<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Session_Current extends Model_Session {
    function init(){
        parent::init();
        $this->addCondition('iscurrent',true);
    }
}