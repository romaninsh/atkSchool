<?php


class page_master_fee_head extends page
{
    
    function init()
    {
        
        parent::init();
        
        $crud=$this->add('CRUD');
        $crud->setModel('Fee');
    }
}
