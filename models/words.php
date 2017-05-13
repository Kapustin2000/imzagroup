<?php

class Words extends Model {
    public function getEn(){
        $sql = "SELECT `array`  FROM transaltor where language = 'en'";
        return $this->db->query($sql);
    }
    public function getAz(){
        $sql = "SELECT `array`  FROM transaltor where language = 'az'";
        return $this->db->query($sql);
    }
    public function getRu(){
        $sql = "SELECT `array`  FROM transaltor where language = 'ru'";
        return $this->db->query($sql);
    }
    public function getFr(){
        $sql = "SELECT `array`  FROM transaltor where language = 'fr'";
        return $this->db->query($sql);
    }
    public function getLanguage($language){
        $sql = "SELECT `array`  FROM transaltor where language = '{$language}'";
        return $this->db->query($sql);
    }
    public function addWord($array,$language){
        $sql = "UPDATE transaltor set array = '{$array}' where language='{$language}'";
        return $this->db->query($sql);
    }
    public function updateWords($array,$language){
        $sql = "UPDATE transaltor set array = '{$array}' where language='{$language}'";
        return $this->db->query($sql);
    }
    public function saveWord($language,$word_default,$translate){
              if(unserialize($this->getLanguage($language)[0]['array'])==null){
                  $new_translate = array();
                  $post_words = array(str_replace(" ", "&nbsp;", "$word_default")=>str_replace(" ", "&nbsp;", "$translate"));
                 $new_word = serialize(array_merge($new_translate, $post_words));
                  return $this->addWord($new_word,$language);
              }elseif(unserialize($this->getLanguage($language)[0]['array'])!==null){
                  $post_words = array(str_replace(" ", "&nbsp;", "$word_default")=>str_replace(" ", "&nbsp;", "$translate"));
                $new_word =serialize( array_merge((unserialize($this->getLanguage($language)[0]['array'])), $post_words));
                  return $this->addWord($new_word,$language);
              }
    }

}