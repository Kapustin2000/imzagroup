<?php
class StatisticsController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Stats();
    }
    public function admin_index(){
        $this->data['blogs'] = $this->data2 = $this->model->getBlogs();
        $this->data['messages'] = $this->data2 = $this->model->getMessages();
        $this->data['users'] = $this->data2 = $this->model->getUsers();
        $this->data['lastorders'] = $this->data2 = $this->model->getLastOrders();
        $this->data['active'] = $this->data2 = $this->model->getOnlineUsers();
        $this->data['tasks'] = $this->data2 = $this->model->Tasks();
        $this->data['Chat'] = $this->data2 = $this->model->Chat();

        if(isset($_POST['task'])&&$_POST['task']!==null){
            $result=$this->model->NewTask($_POST['task']);
            if ( $result ){
                Session::setFlash('Task was saved.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/');
        }
        if(isset($_POST['message'])&&$_POST['message']!==null){
            $result=$this->model->NewMessage($_SESSION['login'],$_POST['message']);
            if ( $result ){
                Session::setFlash('Message was saved.');
            } else {
                Session::setFlash('Error.');
            }
        }
    }
    public function index(){
        Router::redirect('/main/');
    }

    public function admin_delete(){
        if ( isset($this->params[0]) ){
            $result = $this->model->delete($this->params[0]);
            if ( $result ){
                Session::setFlash('Task was deleted.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/');
        }
    }
}