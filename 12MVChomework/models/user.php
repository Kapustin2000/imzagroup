<?php
class User extends Model {
    public function save($data, $id=null){


        $id = (int)$id;
        $login = $this->db->escape($data['name']);
        $email = $this->db->escape($data['mail']);
        $phone = $this->db->escape($data['phone']);
        $hash = md5(Config::get('salt').$this->db->escape($data['password']));


        if(!$id){ // Add new record
            $sql = "
                    insert into users
                      set login = '{$login}',
                          email = '{$email}',
                          password = '{$hash}',
                          phone = '{$phone}',
                          role='user'
                   ";
        }
        return $this->db->query($sql);

    }
    public function UserMoneySpended($id){
        $sql = "SELECT SUM(price) as money FROM orders where is_complete=1 and  id='{$id}'";
        return $this->db->query($sql);
    }
    public function delete($id){
        $id = (int)$id;
        $sql = "delete from users where id = {$id}";
        return $this->db->query($sql);
    }
    public function getByID($login){
        $login = $this->db->escape($login);
        $sql = "select * from users where id='{$login}'";
        $result = $this->db->query($sql);
        if ( isset($result[0]) ){
            return $result[0];
        }
        return false;
    }
    public function getByLogin($login){
        $login = $this->db->escape($login);
        $sql = "select * from users where email='{$login}'";
        $result = $this->db->query($sql);
        if ( isset($result[0]) ){
            return $result[0];
        }
        return false;
    }
    public function getList(){
        $sql = "select * from users where 1";
        return $this->db->query($sql);
    }
    public function getUserInfo($login){
        $sql = "select * from users where login='{$login}'";
        return $this->db->query($sql);
    }
    public function getProducts($login){
        $sql = "SELECT * from products JOIN corzina ON corzina.product_id=products.id where corzina.user_id='{$login}'  ";
        return $this->db->query($sql);
    }
    public function getPopular(){
        $sql = "SELECT * from products where is_popular=1  limit 4 ";
        return $this->db->query($sql);
    }

}