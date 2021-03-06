<?php

class Model_Scholar extends Model_Table{
    var $table='scholars_master';
    function init(){
        parent::init();
        $this->addField('scholar_no')->mandatory("Scholar Number is Must")  ;
        $this->addField('fname')->mandatory("Name is Must")->caption('Name');
        $this->addField('mname');
        $this->addField('lname');
        $this->addField('father_name')->mandatory("Required Field")->caption('Father`s Name');
        $this->addField('mother_name')->mandatory("Required Field")->caption('Mother`s Name');
        $this->addField('dob')->type('date')->mandatory("Required Field")->caption('Date of Birth');
        $this->addField('contact')->mandatory("Required Field");
        $this->addField('p_address')->mandatory("Required Field")->caption('Permanent Address');
        $this->addField('l_address')->caption('Local Address');
        $this->addField('sex')->type('radio')->listData(array("M"=>"M","F"=>"F"))->defaultValue('M');
        $this->addField('category');
        $this->addField("isActive")->type('boolean')->mandatory("Is This Active")->defaultValue(true);
        
        $this->addExpression('name')->set('concat(fname," ",lname)');
        
        
 //       if(!$all) $this->addCondition('isActive',true);
    }
}
?>
