<?php
class SettingsController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new News();
    }

    public function admin_index(){

    }
}