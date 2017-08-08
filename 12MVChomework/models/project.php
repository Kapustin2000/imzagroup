<?php
class Project extends Model{
    public function getById($alias){
        $sql = "SELECT * from projects where alias = '{$alias}' ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getID($alias){
        $sql = "SELECT `id`,`img` from projects where alias = '{$alias}' ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getNext($id){
        $sql = "SELECT `id`,`alias` FROM `projects` WHERE `id`> $id ORDER BY `id` ASC limit 1  ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getPrevious($id){
        $sql = "SELECT `id`,`alias` FROM `projects` WHERE `id`< $id ORDER BY `id` DESC limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getNews($from,$to){

        if($from == 0){
            $start=abs($from*$to);
        }else{
            $start=abs($from*$to)-$to;
        }

        $sql = "SELECT * from projects limit $start,$to ";
        return $this->db->query($sql);
      //  return isset($result[0]) ? $result[0] : null;
    }
    public function delete($id){
        $id = (int)$id;
        $sql = "delete from projects where id = {$id};  ";
        return $this->db->query($sql);
    }
    public function getImage($id){
        $id = (int)$id;
        $sql = "select `img` from projects where id = '{$id}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getDate($date){
       $dates=['March'=>'Март','Январь'=>'January','February'=>'Февраль','April'=>'Апрель','May'=>'май','June'=>'Июнь','July'=>'Июль','August'=>'Август','September'=>'Сентябрь','October'=>'Октябрь','November'=>'Ноябрь','December'=>'Декабрь'];
        foreach($dates as $item=>$key){
            if($item==$date){
                return $key;
            }
        }
    }
    public function addSub($data, $id = null){
        $name = $this->db->escape($data['name']);
        $email = strtolower($this->db->escape($data['email']));

            $sql = "
                insert into subs
                   set name = '{$name}',
                        email = '{$email}'
                        ;
            ";

        return $this->db->query($sql);

    }

    public function saveProject($data, $id = null,$img,$alias = ''){
        if ( !$id ){ // Add new record
            $sql = "
                insert into projects
                   set alias = '{$alias}',
                        array = '{$data}',
                        img = '{$img}';
            ";
        }else{
            $sql = "
                update  projects
                  set alias = '{$alias}',
                        array = '{$data}'
                       where id = '{$id}';
            ";

        }
        return $this->db->query($sql);

    }
    public function countPages($news_limit){
        $sql = "SELECT COUNT(`id`) as pages from projects  ";
        $result = ceil(  $this->db->query($sql)[0]['pages'] / $news_limit);

        return $result;
        //  return isset($result[0]) ? $result[0] : null;
    }
    public function getList(){
        $sql = "select * from projects where 1";
        return $this->db->query($sql);
    }
    public function getLatest($id){
        $sql = "SELECT * from projects where id != '{$id}' limit 3 ";
        return $this->db->query($sql);
    }


}