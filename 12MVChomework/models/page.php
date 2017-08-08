<?php
class Page extends Model{
    public function saveText($array,$page){
        $sql = "UPDATE pages set array = '{$array}' where page = '{$page}'";
        return $this->db->query($sql);
    }
    public function getNews(){
        $sql = "select * from blog where 1 limit 3";
        return $this->db->query($sql);
    }
    public function getText($page){
        $sql = "SELECT array from pages where page = '{$page}'";
        return $this->db->query($sql);
    }

}