<?php

class Mailler extends Model{
    public function UpdateMessage($string){
        $sql = "update sms_message set sms = '{$string}'  where id = 1";
        return $this->db->query($sql);
    }
    public function getLastNews(){
        $sql = "SELECT `array` FROM `blog` WHERE 1 limit 1";
        return $this->db->query($sql);
    }
    public function getMessage(){
        $sql = "select `sms`  from sms_message where id = 1";
        return $this->db->query($sql);
    }

    public function getList(){
        $sql = "select * from subs where 1";
        return $this->db->query($sql);
    }

    public function getPhone($id){
        $sql = "select `phone` from users where id = '{$id}'";
        return $this->db->query($sql);
    }
    public function sendSMS($id){
       $phone= ($this->getPhone($id)[0]['phone']);
        $message= ($this->getMessage()[0]['sms']);
        $sql = "insert into SneakerBoots set number='{$phone}',sign = 'SneakerBoots',message='{$message}'";
        return $this->db->send($sql);
    }
    public function getEmail($id){
        $sql = "select `email` from subs where id = '{$id}'";
        return $this->db->query($sql);
    }
    public static function send($email,$subject,$message){

        $mail = new PHPMailer();



      $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.yandex.ru';

        $mail->isHTML(true);
         $mail->ChartSet='UTF-8';
        $mail->Port = 465;
        $mail->Username = 'mihail.donatelo@yandex.ua';                 // SMTP username
        $mail->Password = 'mihail.donatelo228';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
               $mail->setFrom('mihail.donatelo@yandex.ua','Test Test');
               if(is_array($email)&& !empty($email)){
                   foreach($email as $item){
                       $mail->addAddress($item);
                   }
               }else{
                   $mail->addAddress($email);
               }
               $mail->Subject = $subject;

        ob_start();
        include ROOT.DS.'webroot'.DS.'templates'.DS.'email.html';
        $html=ob_get_clean();
               $mail->Body    = $html;
               if(!$mail->send()) {
                   echo 'Message could not be sent.';
                   echo 'Mailer Error: ' . $mail->ErrorInfo;
               } else {
                   echo 'Message has been sent';
               }

    }
}