<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class page_test extends Page{ 
    function initMainPage(){
        parent::init();
        
        $m=$this->add('Model_Fee');
        $c=$this->add('CRUD');
        $c->setModel($m);
        if($c->grid){
            $c->grid->addColumn('expander','pg2');
        }
        
    }
    
    function page_pg2() {
        parent::init();
        $f=$this->add('Form');
        $f->addField('line','name');
        $f->addSubmit();
        if($f->isSubmitted()){
            $f->js()->univ()->successMessage('sdfsdfs');
        }
    }
}