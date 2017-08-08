<?php
class ProjectsController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Project();
    }
    public function index(){
        if($_POST){
            $this->model->addSub($_POST);
            Router::redirect($_SERVER['REQUEST_URI']);
        }
        $total_news=4;
        $this->data['pages'] = $this->model->countPages($total_news);
        if(isset($_GET['page']) && $_GET['page'] >= 1){
            $this->data['projects'] = $this->model->getNews($_GET['page'],$total_news);
        }else{
            $this->data['projects'] = $this->model->getNews(0,$total_news);
        }

    }
    public function admin_index(){
        $this->data['news'] = $this->model->getList();
    }

    public function view(){
        if ( isset($this->params[0]) ){
            $this->data['project'] = unserialize( $this->model->getById($this->params[0])['array']);
            $this->data['img'] = $this->model->getID($this->params[0])['img'];
            $id = $this->model->getID($this->params[0])['id'];
           $this->data['latest'] = $this->model->getLatest($id);


        }
    }

    public function admin_add(){
         if($_POST){
             $id = isset($_POST['id']) ? $_POST['id'] : null;
             $random=rand(1, 5000);
             $result = $this->model->saveProject(serialize($_POST), $id,$random,strtolower($_POST['alias']));
             if ( $result ){
                 if(isset($_FILES['add_photo1']['tmp_name'][0]) && !empty($_FILES['add_photo1']['tmp_name'][0]) ){
                     foreach (($_FILES['add_photo1']['tmp_name']) as $tmp_file) {
                             move_uploaded_file($tmp_file, 'uploads' . DS . 'projects' . DS . $random . 'first'. '.jpg');
                     }
                 }
                 if(isset($_FILES['add_photo2']['tmp_name'][0]) && !empty($_FILES['add_photo2']['tmp_name'][0]) ){
                     foreach (($_FILES['add_photo2']['tmp_name']) as $tmp_file) {
                         move_uploaded_file($tmp_file, 'uploads' . DS . 'projects' . DS . $random . 'second'. '.jpg');
                     }
                 }
                 if(isset($_FILES['add_photo3']['tmp_name'][0]) && !empty($_FILES['add_photo3']['tmp_name'][0]) ){
                     foreach (($_FILES['add_photo3']['tmp_name']) as $tmp_file) {
                         move_uploaded_file($tmp_file, 'uploads' . DS . 'projects' . DS . $random . 'third'. '.jpg');
                     }
                 }
                 Session::setFlash('Новость была сохранена.');
             } else {
                 Session::setFlash('Error.');
             }
             Router::redirect('/admin/projects/');
         }
    }
    public function admin_delete(){
        if ( isset($this->params[0]) ){
            $img=$this->model->getImage($this->params[0]);
            if (file_exists('uploads' . DS . 'projects' . DS . $img['img'] .'first'.'.jpg')) {
                unlink('uploads' . DS . 'projects' . DS . $img['img'] .'first'.'.jpg');
            }
            if (file_exists('uploads' . DS . 'projects' . DS . $img['img'] .'second'.'.jpg')) {
                unlink('uploads' . DS . 'projects' . DS . $img['img'] .'second'.'.jpg');
            }
            if (file_exists('uploads' . DS . 'projects' . DS . $img['img'] .'third'.'.jpg')) {
                unlink('uploads' . DS . 'projects' . DS . $img['img'] .'third'.'.jpg');
            }
            $result = $this->model->delete($this->params[0]);
            if ( $result ){
                Session::setFlash('Project was deleted.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/projects/');
        }

    }
    public function admin_edit(){

        if ( $_POST ){
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->saveProject(serialize($_POST), $id,null,$_POST['alias']);

            if(isset($_FILES['add_photo1']['tmp_name'][0]) && !empty($_FILES['add_photo1']['tmp_name'][0]) ){
                if (file_exists('uploads' . DS . 'projects' . DS . $_POST['img'] .'first'.'.jpg')) {
                    unlink('uploads' . DS . 'projects' . DS . $_POST['img'] .'first'.'.jpg');
                }
                foreach (($_FILES['add_photo1']['tmp_name']) as $tmp_file) {
                    move_uploaded_file($tmp_file, 'uploads' . DS . 'projects' . DS . $_POST['img'] .'first'.'.jpg');
                }
            }
            if(isset($_FILES['add_photo2']['tmp_name'][0]) && !empty($_FILES['add_photo2']['tmp_name'][0]) ){
                if (file_exists('uploads' . DS . 'projects' . DS . $_POST['img'] .'second'.'.jpg')) {
                    unlink('uploads' . DS . 'projects' . DS . $_POST['img'] .'second'.'.jpg');
                }
                foreach (($_FILES['add_photo2']['tmp_name']) as $tmp_file) {
                    move_uploaded_file($tmp_file, 'uploads' . DS . 'projects' . DS . $_POST['img'] .'second'.'.jpg');
                }
            }
            if(isset($_FILES['add_photo3']['tmp_name'][0]) && !empty($_FILES['add_photo3']['tmp_name'][0]) ){
                if (file_exists('uploads' . DS . 'projects' . DS . $_POST['img'] .'third'.'.jpg')) {
                    unlink('uploads' . DS . 'projects' . DS . $_POST['img'] .'third'.'.jpg');
                }
                foreach (($_FILES['add_photo3']['tmp_name']) as $tmp_file) {
                    move_uploaded_file($tmp_file, 'uploads' . DS . 'projects' . DS . $_POST['img'] .'third'.'.jpg');
                }
            }
            if ( $result ){
                Session::setFlash('Project was EDITED.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/projects/');

        }
        if ( isset($this->params[0]) ){
            $this->data['page'] = unserialize( $this->model->getById($this->params[0])['array']);
            $this->data['id'] =  $this->model->getID($this->params[0]);
        } else {

        }
    }
}