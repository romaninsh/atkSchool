<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class page_master_scholar extends Page {

    function initMainpage() {
        parent::init();
        // $crud=$this->add('CRUD',array('allow_add'=>false));

        $crud = $this->add('CRUD');
        $m = $this->add('Model_Scholar_Current');
        $crud->setModel($m, null, array('name', 'scholar_no', 'class'));
        if($crud->form){
            // make form flow in 2 columns
            $crud->form->setFormClass('stacked atk-row');
            $o=$crud->form->add('Order')
                ->move($crud->form->addSeparator('noborder span6'),'first')
                ->move($crud->form->addSeparator('noborder span5'),'middle')
                ->now();
        }

        if ($crud->grid) {
            $crud->grid->addButton('Enroll Existing scholar in This Session')->js('click')->univ()->frameURL('Associate Existing Student For Current Session', $this->api->url('./enroll'));
            $crud->grid->addColumn('expander', 'master_scholar_details');
            $crud->grid->addQuickSearch(array('name', 'scholar_no', 'class'));
            $crud->add_button->set("Add New Scholar");
        }
    }

    function page_master_scholar_details() {
        $m = $this->add('Model_Scholar_Current');
        $m->addCondition('session_id', $this->add('Model_Session_Current')->dsql()->field('id'));
        $this->add('H1')->set("This is Mazor ... How to add/edit current class for this scholar for CURRENT SESSION HERE");
        $f = $this->add('MVCForm');
        $f->setModel($m)->load($_GET['scholars_master_id']);
        $f->addSubmit("Update Scholars details");
        if ($f->isSubmitted()) {
            $f->update();
        }
//        $crud=$this->add('CRUD');
//        $crud->setModel('Student');
    }

    function page_enroll() {

        $m = $this->add('Model_Student');
        $m->hasOne('Class', 'class_id');
        $m->hasOne('Session', 'session_id');
        $m->addCondition('session_id', $this->add('Model_Session_Current')->dsql()->field('id')->getOne());

        $f = $this->add('Form');

        $f->setModel($m);
        $f->addSubmit();
        if ($f->isSubmitted())
            $f->update()->js()->univ()->successMessage('Enrolled')->closeDialog()->execute();
    }

}