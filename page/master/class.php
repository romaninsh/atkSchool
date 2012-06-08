<?php

class page_master_class extends page
{
function init()
{
    parent::init();
    $btn_class_master=$this->add('Button','class_master')->set('Class Master');
    $btn_subject_master=$this->add('Button','subject_master')->set('Subject Master');
    $btn_student_list=$this->add('Button','student_list')->set('Student List ');
    $btn_attendance= $this->add('Button','Attendance')->set('Attendance');
 //------------------------------------------------------------------------------------------
    $f_class_master=$this->add('Form');
    $f_class_master->js(true)->hide();
    
    $f_subject_master=$this->add('Form');
    $f_subject_master->js(true)->hide();
    
    $crud_class=$f_class_master->add('CRUD');
    $crud_class->setModel('Class');
    $btn_class_master->js('click',array(
                              $f_subject_master->js()->hide(),
                              $f_class_master->js()->show()             
                          ));            
 //-----------------------------------------------------------------------------------------           
 
    
    $crud_subject=$f_subject_master->add('CRUD');
    $crud_subject->setModel('Subject');
    $btn_subject_master->js('click',array(
                              $f_subject_master->js()->show(),
                              $f_class_master->js()->hide()
                         ) ); 
    
    
 }

    
}
?>
