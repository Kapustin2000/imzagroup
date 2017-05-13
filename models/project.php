<?php
class Project extends Model{
    public function getById($alias){
        $sql = "SELECT * from blog where alias = '{$alias}' ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getID($alias){
        $sql = "SELECT `id`,`img` from blog where alias = '{$alias}' ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getNext($id){
        $sql = "SELECT `id`,`alias` FROM `blog` WHERE `id`> $id ORDER BY `id` ASC limit 1  ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    public function getPrevious($id){
        $sql = "SELECT `id`,`alias` FROM `blog` WHERE `id`< $id ORDER BY `id` DESC limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getNews($from,$to){

        if($from == 0){
            $start=abs($from*$to);
        }else{
            $start=abs($from*$to)-$to;
        }

        $sql = "SELECT * from blog limit $start,$to ";
        return $this->db->query($sql);
      //  return isset($result[0]) ? $result[0] : null;
    }
    public function delete($id){
        $id = (int)$id;
        $sql = "delete from blog where id = {$id};  ";
        return $this->db->query($sql);
    }
    public function getImage($id){
        $id = (int)$id;
        $sql = "select `img` from blog where id = '{$id}' limit 1";
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
    public function add_news($data, $id = null,$img){
        $id = (int)$id;
        $title = $this->db->escape($data['title']);
        $alias = strtolower($this->db->escape($data['alias']));
        $text = $this->db->escape($data['text']);
        $text2 = $this->db->escape($data['text2']);
        $quot= $this->db->escape($data['quot']);
        $author= $this->db->escape($data['author']);
        $creator = $this->db->escape($data['creator']);
        $date =   date(' j ').$this->getDate(date('F')).date(' Y ');
        if ( !$id ){ // Add new record
            $sql = "
                insert into blog
                   set title = '{$title}',
                        alias = '{$alias}',
                        img = '{$img}',
                       text = '{$text}',
                       text2 = '{$text2}',
                       quot = '{$quot}',
                       author = '{$author}',
                       dt_creation = '{$date}',
                       creator = '{$creator}';
            ";
        }else{
            $sql = "
                update  blog
                   set title = '{$title}',
                        alias = '{$alias}',
                       text = '{$text}',
                       text2 = '{$text2}',
                       quot = '{$quot}',
                       author = '{$author}',
                       creator = '{$creator}'
                       where id = '{$id}';
            ";

        }
        return $this->db->query($sql);

    }
    public function saveBlog($data, $id = null,$img,$alias = ''){
        if ( !$id ){ // Add new record
            $sql = "
                insert into blog
                   set alias = '{$alias}',
                        array = '{$data}',
                        img = '{$img}';
            ";
        }else{
            $sql = "
                update  blog
                  set alias = '{$alias}',
                        array = '{$data}'
                       where id = '{$id}';
            ";

        }
        return $this->db->query($sql);

    }
    public function getList(){
        $sql = "select * from blog where 1";
        return $this->db->query($sql);
    }
    public function countPages($news_limit){
        $sql = "SELECT COUNT(`id`) as pages from blog  ";
         $this->db->query($sql);
         $result = ceil(  $this->db->query($sql)[0]['pages'] / $news_limit);
        return $result;
        //  return isset($result[0]) ? $result[0] : null;
    }
    public function getComments($id){
        $sql = "SELECT * from comments JOIN coms_blog ON comments.id=coms_blog.comment_id	 where coms_blog.blog_id='{$id}' ";
        $result = $this->db->query($sql);
        return $this->db->query($sql);
    }
    public function getLatest($id){
        $sql = "SELECT * from blog where id != '{$id}' limit 4 ";
        return $this->db->query($sql);
    }
    public function save($data){

        if(!isset($data['message']) || !isset($data['name']) || !isset($data['email'])){
            return false;
        }
        $id = $this->db->escape($data['id']);
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);
        if(isset($data['website']) &&$data['website']!=null){
            $website = $this->db->escape($data['website']);
        }else{
            $website='none';
        }

        $sql = "
                insert into comments
                   set name = '{$name}',
                          email = '{$email}',
                          comment = '{$message}',
                          website = '{$website}';
                    insert into coms_blog
                   set blog_id = {$id},
                       	comment_id = LAST_INSERT_ID();
            ";
        return $this->db->multi_query($sql);

    }

}