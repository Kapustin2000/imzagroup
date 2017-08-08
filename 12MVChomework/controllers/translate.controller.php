<?php
class TranslateController extends Controller{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Words();
    }
    public function admin_index(){
        $this->data['en'] = $this->model->getEn();
        $this->data['az'] = $this->model->getAz();
        $this->data['ru'] = $this->model->getRu();
    }
    public function admin_add(){
       if($_POST){
           if($_POST['language']===0){
               return false;
           }
           $result = $this->model->saveWord($_POST['language'],strtolower ($_POST['word1']),$_POST['word2']);
           if ( $result ){
               Session::setFlash('Word was added.');
           } else {
               Session::setFlash('Error.');
           }
              Router::redirect('/admin/translate/');
       }
    }
    public function admin_delete(){
        if ( isset($this->params[0]) ){   //Здесь проверяю пришел ли параметр в URL. Обычно это параметр вида en_test 3 , где en = язык,test 3 - слово которое надо удалить
            // Здесь делю приходящий в url параметр на 2 строчки
            $get_array = explode("_",$this->params[0]);
            // На основе языка вытаскиваю массив со словарем
            $array = (unserialize($this->model->getLanguage($get_array[0])[0]['array']));

            // А здесь я уже использую вторую строку из парметра (то есть ключ коотрый надо удалить)
            $key = str_replace(' ', "&nbsp;", $get_array[1]);
            //Здесь должно удаляться ,но не хочет
            unset($array[$key]);
            // Это вывод для себя
            // Сохранене массива уже без нужного ключа
            $result = $this->model->updateWords(serialize($array),$get_array[0]);
            if ( $result ){
                Session::setFlash('Word was deleted.');
            } else {
                Session::setFlash('Error.');
            }
        }
         Router::redirect('/admin/translate');
    }

}