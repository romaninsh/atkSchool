<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Fee extends Model_Table {

    var $table = 'fee_header';

    function init() {
        parent::init();
        $this->addField('ftype')->mandatory('Fee Head Should have a name')->caption('Fee Type');
        $this->addField('amount')->type("int")->mandatory("Fee Amount should be entered");
        $this->addField('isoptional')->type('boolean')->caption('IsOptional');
    }

    
    

}