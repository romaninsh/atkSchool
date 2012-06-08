<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class page_master_student extends page
{
    function initMainPage() 
    {
        parent::init();
        {
            parent::init();
            $this->setModel('Scholar');
            $btnNewStudent=$this->add('Button',"btn_add")->setLabel('Add New Student');
           // $btnNewStudentHide=$this->add('Button',"btn_addhide")->setLabel('Hide Add New Student');
            $btnStudentEnquiry=$this->add('Button')->setLabel('Student Enquiry');
            
            
//            $cols=$this->add('Columns')           ;
//            $left=$col->addColumn();
//            $right=$cols->addColumns();
            
            $f=$this->add('Form');
            $f->setModel('Scholar');
            $f->js(true)->hide();
            $f->addSubmit();
            
            //$btnNewStudentHide->js(true)->hide();
            
            
//            $btnNewStudentHide->js('click',
//                    array(
//                        $f->js()->hide('slow'),
//                        $btnNewStudentShow->js()->show(),
//                        $btnNewStudentHide->js()->hide())
//                    );
            
            $f_enquiry=$this->add('Form');
            
            $crud=$f_enquiry->add('CRUD');
            $crud->setModel('Scholar',true,array('scholar_no','fname','father_name'));

                  if($crud->grid)
                      {
                        $crud->grid->addColumn('expander','master_student_details','Details');
                       }
                  
//---------------------------------------------------------------------------------------------------------------------------            
            $btnNewStudent->js('click',
                    array(
                        $f_enquiry->js()->hide(),                          
                        $f->js()->show()
                      //  $btnNewStudentShow->js()->hide,
                      //$btnNewStudentHide->js()->show()
                    )
                    );
//---------------------------------------------------------------------------------------------------------------------------            
            $f_enquiry->js(true)->hide();
            $btnStudentEnquiry->js('click',
                    array(
                        $f->js()->hide(),
                        $f_enquiry->js()->show())
                    );
            
            
            
            if($f->isSubmitted()){
    $f->update();
    $f->js()->univ()->alert('saved')->execute();
}
            
            
            
            
            }
    }
     function page_master_student_details(){
                            $this->add("Text")->set('hello ');
                                       }
    
    
}
?>