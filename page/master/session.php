<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class page_master_session extends Page {
    function init(){
        parent::init();
        $crud=$this->add('CRUD');
        $crud->setModel('Session',array('name'),array('name','iscurrent'));
        if($crud->grid)
            $crud->grid->addColumn('button',"set_current");
        if($_GET['set_current']){
            $s=$this->add('Model_Session');
            $s->load($_GET['set_current']);
            $s->markCurrent();
            $this->js(null,$crud->grid->js()->reload())->univ()->successMessage($s->get('name')." is marked as Current")->execute();
        }
    }
}