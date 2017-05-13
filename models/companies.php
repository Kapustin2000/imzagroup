<?php
class Companies extends Model{
    public function getList($only_published = false){
        $sql = "select * from company where 1";
        return $this->db->query($sql);
    }
    public function getMenu($only_published = false){
        $sql = "select * from pages where 1";
        if ( $only_published ){
            $sql .= " and is_published = 1";
        }
        $pages=$this->db->query($sql);
        foreach($pages as $arr ){
            /* echo  '<li><a class="item" <?php if( App::getRouter()->getController() == "$arr["title"]" ) {?>class="active"<?php } ?> href="/pages/"><?php $arr["title"] ?></a></li>';*/
            echo $arr['title'];
        }
    }

    public function getByAlias($alias){
        $alias = $this->db->escape($alias);
        $sql = "select * from pages where alias = '{$alias}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getById($id){
        $id = (int)$id;
        $sql = "select * from pages where id = '{$id}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function save($data, $id = null,$random){
        if ( !isset($data['Company']) ){
            return false;
        }
        $id = (int)$id;
        $company = $this->db->escape($data['Company']);
        $is_published = isset($data['is_published']) ? 1 : 0;
        if ( !$id ){ // Add new record
            $sql = "
                insert into company
                   set name = '{$company}',
                   img='{$random}'
            ";
        }
        return $this->db->query($sql);
    }
    public function delete($id){
        $id = (int)$id;
        $sql = "delete from company where id = {$id}";
        return $this->db->query($sql);
    }
}