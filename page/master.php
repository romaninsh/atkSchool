<?php

class page_master extends page
{
    function init()
    {
        parent::init();
        $tabs=$this->add('Tabs');

        $tabs->addTabURL('master_session',"Sessions");
        $tabs->addTabURL('master_class','Classes');
        $tabs->addTabURL('master_scholar',"Current Scholars");
//        $tabs->addTabURL('master_student',"Student");
//        $tabs->addTab('Hostel')->add('CRUD')->setModel('Hostel');
//        $tabs->addTabURL('master_fee','Fee');
//        $tabs->addTab('Exam')->add('CRUD')->setModel('Exam');
 //       $crud->setModel('Session');
//        if($crud->grid){
//            $crud->grid->addColumn("button","set_session");
//        }
//        if($_GET['set_session']){
//            $s=$this->add('Model_Session');
//            $s->load($_GET['set_session']);
//            $s->markCurrent();
//            $this->js()->univ()->successMessage("Hi done theasdas")->execute();
//        }
//    }
}
}
?>
