<?php
class ImzaController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Page();
    }
    public function index(){
        $this->data['text'] = unserialize($this->model->getText('imza')[0]['array']);
    }

    public function admin_edit(){
        $this->data['text'] = unserialize($this->model->getText('imza')[0]['array']);
        if($_POST){
            $result = $this->model->saveText(serialize($_POST),'imza');
            if(isset($_FILES['bc3']['tmp_name'][0]) && !empty($_FILES['bc3']['tmp_name'][0]) ){
                foreach (($_FILES['bc3']['tmp_name']) as $tmp_file) {
                    if (file_exists('img'.DS.'bc3'.'.jpg')) {
                        move_uploaded_file($tmp_file, 'img'.DS.'bc3'.'.jpg');
                    } else {
                        move_uploaded_file($tmp_file, 'img'.DS.'bc3'.'.png');
                    }
                }
            }
            if ( $result ){
                Session::setFlash('Page was edited.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/settings');
        }
    }

}