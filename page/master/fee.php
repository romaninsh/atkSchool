<?php

class page_master_fee extends page
{
    function init()
    {
        parent::init();
        $tabs=$this->add('Tabs');
        //$crud=
        $tabs->addTabURL('../fee_head',"Fee Structure");
//        $tabs->addTabURL('master_studentex',"StudentEx");
//           $tabs->addTabURL('master_student',"Student");
//        
    }
    
}
?>
