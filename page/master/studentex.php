<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class page_master_studentex extends page {

    function init() {
        parent::init();
        $f = $this->add('Form');
        //$f->setModel('Scholar',false);
        $f->addField('radio', 'Search_by')->setValueList(array('S' => 'By Scholar', 'N' => 'By Name'));
        $f->addField('line', 'fscholar_no');
        // $f->addField('line','class');
        //$btn=$f->add('Button')->set('Save');
        $f->addSubmit();
        //$grid->setModel('Scholar');//,array('scholar_no','fname','father_name'));
        //$grid->addColumn('Scholar_no');
        //$grid->addColumn('name');
        //$str=$this->api->db->dsql()
        //->table('scholars_master')
        //->field('scholar_no')        
        //->field('fname' )
        //->where('scholar_no',12)
        //->select();
        //$grid->setSource($str);
        //$data=$str->get();        
        $grid = $this->add('Grid');
        $m = $this->add("Model_Scholar");
        if ($_GET['filter_sid']) {
            $m->addCondition('scholar_no', $_GET['filter_sid']);
        }
        if($_GET['filter_name']){
            $m->addCondition('fname',$_GET['filter_name']);
        }
        $m = $grid->setModel($m);
//        $grid->addQuickSearch(array('fname','scholar_no'));
//         if($f->isSubmitted())
//        {
//       // $btn->js('click',
//         
//         
//         $grid->dq->where('scholar_no',12);
//        }
        $grid->addButton('Reload Grid', 'btn');
        //->js('click')->reload(array($grid->dq->where('scholar_no',12)))->execute();
        if ($f->isSubmitted()) {
            if ($f->get('Search_by') == 'S') {
                $grid->js()->reload(array(
                    "filter_sid" => $f->get('fscholar_no')
                ))->execute();
            }else{
                $grid->js()->reload(array(
                    "filter_name" => $f->get('fscholar_no')
                ))->execute();
            }
        }
    }

}

