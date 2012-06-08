<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class page_master_scholar extends Page {
    function initMainPage(){
        parent::init();
        $crud=$this->add('CRUD');
        $crud->setModel('Scholar',null,array('scholar_no','name'));
       if($crud->grid){
            $crud->grid->addColumn('expander','master_scholar_details');
            $crud->grid->addQuickSearch(array('name','scholar_no'));
        }
        
    }
   
    function page_master_scholar_details(){
        $f=$this->add('MVCForm');
        $f->setModel('Scholar')->load($_GET['scholars_master_id']);
        $f->addSubmit("Update Scholars details");
        if($f->isSubmitted()){
            $f->update();
        }
    }
}