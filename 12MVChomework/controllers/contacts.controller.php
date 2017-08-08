<?php
class ContactsController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Message();
    }

    public function index(){
        $this->data['text'] = unserialize($this->model->getText('contacts')[0]['array']);
        if ( $_POST ){
            if ( $this->model->save($_POST) ){
                Session::setFlash('Thank you! Your message was sent successfully!');
                Router::redirect('/');
            } else {
                echo "Ошибка!!!";
            }
            exit;
        }
    }
    public function admin_delete(){
        if ( isset($this->params[0]) ){
            $result = $this->model->delete($this->params[0]);
            if ( $result ){
                Session::setFlash('Message was deleted.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/contacts');
        }

    }
    public function admin_index(){
        $this->data = $this->model->getList();
    }
    public function admin_edit(){
        $this->data['text'] = unserialize($this->model->getText('contacts')[0]['array']);
        if($_POST){
            $result =  $this->model->saveText(serialize($_POST),'contacts');
            if ( $result ){
                Session::setFlash('Page was edited.');
            } else {
                Session::setFlash('Error.');
            }
            Router::redirect('/admin/settings');
        }

    }
}