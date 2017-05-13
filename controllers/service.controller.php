<?php
class ServiceController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Page();
    }
    public function index(){

        $this->data['text'] = unserialize($this->model->getText('service')[0]['array']);

    }


    public function admin_edit(){
        $this->data['text'] = unserialize($this->model->getText('service')[0]['array']);
        if($_POST){
            if(isset($_FILES['add_photo1']['tmp_name'][0]) && !empty($_FILES['add_photo1']['tmp_name'][0]) ){
                foreach (($_FILES['add_photo1']['tmp_name']) as $tmp_file) {
                    if (file_exists('service'.DS.'service1'.'.jpg')) {
                        unlink('service'.DS.'service1'.'.jpg');
                        move_uploaded_file($tmp_file, 'service'.DS.'service1'.'.jpg');
                    } else {
                        move_uploaded_file($tmp_file, 'service'.DS.'service1'.'.jpg');
                    }
                }
            }
            if(isset($_FILES['add_photo2']['tmp_name'][0]) && !empty($_FILES['add_photo2']['tmp_name'][0]) ){
                foreach (($_FILES['add_photo2']['tmp_name']) as $tmp_file) {
                    if (file_exists('service'.DS.'service'.'.jpg')) {
                        unlink('service'.DS.'service2'.'.jpg');
                        move_uploaded_file($tmp_file, 'serivce'.DS.'service2'.'.jpg');
                    } else {
                        move_uploaded_file($tmp_file, 'service'.DS.'service2'.'.jpg');
                    }
                }
            }
            if(isset($_FILES['add_photo3']['tmp_name'][0]) && !empty($_FILES['add_photo3']['tmp_name'][0]) ){
                foreach (($_FILES['add_photo3']['tmp_name']) as $tmp_file) {
                    if (file_exists('service'.DS.'service3'.'.jpg')) {
                        unlink('service'.DS.'service3'.'.jpg');
                        move_uploaded_file($tmp_file, 'service'.DS.'service3'.'.jpg');
                    } else {
                        move_uploaded_file($tmp_file, 'service'.DS.'service3'.'.jpg');
                    }
                }
            }
           $result = $this->model->saveText(serialize($_POST),'service');
            if ( $result ){
                Session::setFlash('Page was edited.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/settings');
        }
    }
}