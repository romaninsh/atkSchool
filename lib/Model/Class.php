<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Class extends Model_Table
{
    
    var $table='class_master';
    function init()
    {
        parent::init();
        $this->addField('class_name','name')->mandatory("Please give a class name")->caption('Class Name');
        $this->addField('section')->mandatory('give a class name');
        $this->addExpression('name')->set('(concat(name," - ",section))');

        $this->hasMany('SubjectClassMap','class_id');
                
    }
    function setSubjects($ids)
    {
    	foreach($ids as $id){
    		$res[]=array('subject_id'=>$id, 'class_id'=>$this->id);
    	}
    	$this->ref('SubjectClassMap')->dsql()->insertAll($res);
    }
}

?>
