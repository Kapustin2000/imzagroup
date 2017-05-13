<?php

Class MailController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Mailler();
    }
    public function admin_index(){
        $this->data = $this->model->getList();
        if(isset($_POST['checkboxes']) && $_POST['checkboxes'] && $_POST['checkboxes'] !=null ){

            foreach($_POST['checkboxes'] as $item => $val ){
                Mailler::send($this->model->getEmail($val)[0]['email'],'test',unserialize($this->model->getLastNews()[0]['array']));
            }
        }
    }
}