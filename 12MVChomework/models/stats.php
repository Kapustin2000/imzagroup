<?php

class Stats extends Model {
    public function getBlogs(){
        $sql = "SELECT COUNT(`id`) as blogs FROM blog where 1;";
        return $this->db->query($sql);
    }
    public function getLastOrders(){
        $sql = "SELECT `id`,`name`,`price`,`date`,`status` FROM orders where `is_complete`=0 limit 10; ";
        return $this->db->query($sql);
    }
    public function NewTask($varchar){
        $sql = "Insert into tasks set task='{$varchar}'";
        return $this->db->query($sql);
    }
    public function NewMessage($name,$varchar){
        $sql = "Insert into chat set user='{$name}',message='{$varchar}'";
        return $this->db->query($sql);
    }
    public function admin_delete(){
        if ( isset($this->params[0]) ){
            $result = $this->model->delete($this->params[0]);
            if ( $result ){
                Session::setFlash('User was deleted.');
            } else {
                Session::setFlash('Error.');
            }
        }
        Router::redirect('/admin/users/');
    }
    public function delete($id){
        $id = (int)$id;
        $sql = "delete from tasks where id = {$id}";
        return $this->db->query($sql);
    }
    public function getOnlineUsers(){
        $sql = "SELECT `id`,`login` FROM users where `is_active`=1 limit 5; ";
        return $this->db->query($sql);
    }
    public function moneyStats(){
        $sql = "SELECT SUM(price) as money FROM orders where is_complete=1 ";
        return $this->db->query($sql);
    }
    public function Tasks(){
        $sql = "SELECT `id`,`task` FROM tasks where 1;";
        return $this->db->query($sql);
    }
    public function Chat(){
        $sql = "SELECT * FROM chat where 1;";
        return $this->db->query($sql);
    }

    public function getMessages(){
        $sql = "SELECT COUNT(`id`) as messages FROM messages where 1";
        return $this->db->query($sql);
    }
    public function getUsers(){
        $sql = "SELECT COUNT(`id`) as users FROM subs where 1";
        return $this->db->query($sql);
    }

}