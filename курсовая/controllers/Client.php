<?php
require ('db.php');
class Client extends db
{
    public function getC(){
        return $this->DBAll('Select * from client');
    }
    public function deleteC($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE from client where id_client='.$req->id_client,
            'Пользователь удален');
    }
    public function createС($request){
        $req = json_decode($request);
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $phone_number = $req->phone_number;
        $mail = $req->mail;
        $passport_details = $req->passport_details;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO client (last_name,name,father_name,phone_number,mail,passport_details) 
                                     values ('{$last_name}','{$name}','{$father_name}','{$phone_number}','{$mail}','{$passport_details}')");
            $connect->commit();
            return json_encode([
                'message'=>'Услуга добавлена'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
    public function updateC($request){
        $req = json_decode($request);
        $id_client=$req->id_client;
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $phone_number = $req->phone_number;
        $mail = $req->mail;
        $passport_details = $req->passport_details;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("UPDATE client set last_name='{$last_name}',name='{$name}',father_name='{$father_name}',phone_number='{$phone_number}',mail='{$mail}',passport_details='{$passport_details}' where id_client={$id_client}");
            $connect->commit();
            return json_encode([
                'message'=>'Услуга добавлена'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
}