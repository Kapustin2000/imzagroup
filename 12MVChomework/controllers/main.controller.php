<?php
class MainController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Page();
    }
    public function index(){
        $this->data['text'] = unserialize($this->model->getText('main')[0]['array']);
        $this->data['news'] = $this->model->getNews();

    }
    public function admin_delete(){


    }
    public function admin_edit()
    {
        if(isset($_FILES['logo1']['tmp_name'][0]) && !empty($_FILES['logo1']['tmp_name'][0]) ){
            foreach (($_FILES['logo1']['tmp_name']) as $tmp_file) {
                if (file_exists('company'.DS.'logo1'.'.jpg')) {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo1'.'.png');
                } else {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo1'.'.png');
                }
            }
        }
        if(isset($_FILES['logo2']['tmp_name'][0]) && !empty($_FILES['logo2']['tmp_name'][0]) ){
            foreach (($_FILES['logo2']['tmp_name']) as $tmp_file) {
                if (file_exists('company'.DS.'logo2'.'.jpg')) {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo2'.'.png');
                } else {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo2'.'.png');
                }
            }
        }
        if(isset($_FILES['logo3']['tmp_name'][0]) && !empty($_FILES['logo3']['tmp_name'][0]) ){
            foreach (($_FILES['logo3']['tmp_name']) as $tmp_file) {
                if (file_exists('company'.DS.'logo3'.'.jpg')) {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo3'.'.png');
                } else {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo3'.'.png');
                }
            }
        }
        if(isset($_FILES['bc']['tmp_name'][0]) && !empty($_FILES['bc']['tmp_name'][0]) ){
            foreach (($_FILES['bc']['tmp_name']) as $tmp_file) {
                if (file_exists('img'.DS.'bc2'.'.jpg')) {
                    move_uploaded_file($tmp_file, 'img'.DS.'bc2'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'img'.DS.'bc2'.'.png');
                }
            }
        }
        if(isset($_FILES['logo4']['tmp_name'][0]) && !empty($_FILES['logo4']['tmp_name'][0]) ){
            foreach (($_FILES['logo4']['tmp_name']) as $tmp_file) {
                if (file_exists('company'.DS.'logo4'.'.jpg')) {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo4'.'.png');
                } else {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo4'.'.png');
                }
            }
        }
        if(isset($_FILES['logo5']['tmp_name'][0]) && !empty($_FILES['logo5']['tmp_name'][0]) ){
            foreach (($_FILES['logo5']['tmp_name']) as $tmp_file) {
                if (file_exists('company'.DS.'logo5'.'.jpg')) {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo5'.'.png');
                } else {
                    move_uploaded_file($tmp_file, 'company'.DS.'logo5'.'.png');
                }
            }
        }
        $this->data['text'] = unserialize($this->model->getText('main')[0]['array']);
        if($_POST){
            $result = $this->model->saveText(serialize($_POST),'main');
            if ( $result ){
                Session::setFlash('Page was edited.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/settings');
        }
    }
}