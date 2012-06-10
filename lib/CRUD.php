<?php
class CRUD extends View_CRUD {
    function setModel($m,$f=null,$f2=null){
        parent::setModel($m,$f,$f2);

        if($this->add_button){
            $this->add_button->setLabel('Add '.str_replace(array('Model_','_'),array('',' '),get_class($this->model)));
        }

    }
}
