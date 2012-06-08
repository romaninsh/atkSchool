<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Session extends Model_Table
{
    var $table='session_master';
    function init() 
    {
        parent::init();
        $this->addField('name')->mandatory("Name of a session is must like [2011-2012]");
        $this->addField('iscurrent')->type('boolean')->defaultValue(false)->caption("Is current");
                
    }
    
    function markCurrent(){
        $this->dsql()->set('iscurrent',0)->do_update();
        $this->set('iscurrent',true)->update();
    }
}

?>
