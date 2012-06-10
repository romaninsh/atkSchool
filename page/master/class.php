<?php

class page_master_class extends page
{
    function init()
    {
        parent::init();
    }
    function page_index(){
        $t=$this->add('Tabs');
        $class_master=$t->addTab('Class Master');
        $subject_master=$t->addTab('Subject Master');
        $subject_class_map=$t->addTab('Subject Class Map');

 //------------------------------------------------------------------------------------------

        $crud_class=$class_master->add('CRUD');
        $crud_class->setModel('Class');

        if($crud_class->grid){
            $crud_class->grid->addColumn('expander','map','Edit Classes');
        }

 //-----------------------------------------------------------------------------------------           

        $crud_subject=$subject_master->add('CRUD');
        $crud_subject->setModel('Subject');
 //-----------------------------------------------------------------------------------------           
    

        $crud_scmap = $subject_class_map->add('CRUD');
        $crud_scmap->setModel('SubjectClassMap');
    }
    function page_map(){
        $p=$this->add('View')->addClass('atk-box ui-widget-content ui-corner-all')
        ->addStyle('background','#eee'); // bevel

        $this->api->stickyGET('class_master_id');
        $cl=$this->add('Model_Class')->load($_GET['class_master_id']);

        $g=$p->add('Grid');
        $g->setModel('Model_Subject');

        $f=$p->add('Form');
        $sel=$f->addField('line','sel');
        $sel->js(true)->closest('.atk-form-row')->hide();

        $map=$cl->ref('SubjectClassMap');
  // fetches IDs
        $sel->set(json_encode($map->dsql()->del('field')->field('subject_id')->execute()->stmt->fetchAll(PDO::FETCH_COLUMN)));

        $g->addSelectable($sel);

        $f->addSubmit('Save');
        if($f->isSubmitted()){
            $this->api->db->beginTransaction();

            // delete old mappings
            $map->deleteAll();
            $cl->setSubjects(json_decode($f->get('sel')));

            $this->api->db->commit();
            $this->js()->univ()->closeExpander()->successMessage('Mapping saved')->execute();
        }
    }
}

