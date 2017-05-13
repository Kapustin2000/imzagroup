<?php
class AboutController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Page();
    }
    public function index(){
        $this->data['text'] = unserialize($this->model->getText('about')[0]['array']);
    }
    public function admin_index(){

    }



    public function admin_delete(){

    }
    public function admin_edit(){
        if(isset($_FILES['add_photo1']['tmp_name'][0]) && !empty($_FILES['add_photo1']['tmp_name'][0]) ){
            foreach (($_FILES['add_photo1']['tmp_name']) as $tmp_file) {
                if (file_exists('gallery'.DS.'about'.'.jpg')) {
                    unlink('gallery'.DS.'about'.'.jpg');
                    move_uploaded_file($tmp_file, 'gallery'.DS.'about'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'gallery'.DS.'about'.'.jpg');
                }
            }
            }
        if(isset($_FILES['add_photo2']['tmp_name'][0]) && !empty($_FILES['add_photo2']['tmp_name'][0]) ){
            foreach (($_FILES['add_photo2']['tmp_name']) as $tmp_file) {
                if (file_exists('gallery'.DS.'about2'.'.jpg')) {
                    unlink('gallery'.DS.'about2'.'.jpg');
                    move_uploaded_file($tmp_file, 'gallery'.DS.'about2'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'gallery'.DS.'about2'.'.jpg');
                }
            }
        }
        if(isset($_FILES['add_photo3']['tmp_name'][0]) && !empty($_FILES['add_photo3']['tmp_name'][0]) ){
            foreach (($_FILES['add_photo3']['tmp_name']) as $tmp_file) {
                if (file_exists('gallery'.DS.'about3'.'.jpg')) {
                    unlink('gallery'.DS.'about'.'.jpg');
                    move_uploaded_file($tmp_file, 'gallery'.DS.'about3'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'gallery'.DS.'about3'.'.jpg');
                }
            }
        }
        if(isset($_FILES['add_photo4']['tmp_name'][0]) && !empty($_FILES['add_photo4']['tmp_name'][0]) ){
            foreach (($_FILES['add_photo4']['tmp_name']) as $tmp_file) {
                if (file_exists('testim'.DS.'testim1'.'.jpg')) {
                    unlink('testim'.DS.'testim1'.'.jpg');
                    move_uploaded_file($tmp_file, 'testim'.DS.'testim1'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'testim'.DS.'testim1'.'.jpg');
                }
            }
        }
        if(isset($_FILES['add_photo5']['tmp_name'][0]) && !empty($_FILES['add_photo5']['tmp_name'][0]) ){
            foreach (($_FILES['add_photo5']['tmp_name']) as $tmp_file) {
                if (file_exists('testim'.DS.'testim2'.'.jpg')) {
                    unlink('testim'.DS.'testim2'.'.jpg');
                    move_uploaded_file($tmp_file, 'testim'.DS.'testim2'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'testim'.DS.'testim2'.'.jpg');
                }
            }
        }
        if(isset($_FILES['add_photo6']['tmp_name'][0]) && !empty($_FILES['add_photo6']['tmp_name'][0]) ){
            foreach (($_FILES['add_photo6']['tmp_name']) as $tmp_file) {
                if (file_exists('testim'.DS.'testim3'.'.jpg')) {
                    unlink('testim'.DS.'testim3'.'.jpg');
                    move_uploaded_file($tmp_file, 'testim'.DS.'testim3'.'.jpg');
                } else {
                    move_uploaded_file($tmp_file, 'testim'.DS.'testim3'.'.jpg');
                }
            }
        }
        $this->data['text'] = unserialize($this->model->getText('about')[0]['array']);
        if($_POST){
            $result = $this->model->saveText(serialize($_POST),'about');
            if ( $result ){
                Session::setFlash('Page was edited.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/settings');
        }

        }



}