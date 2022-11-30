<?php
require ('db.php');
class Staff extends db
{
public function get(){
    return $this->DBAll('Select * from staff');
}
    public function delete($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE from staff where id_worker='.$req->id_worker,
            'Пользователь удален');
    }

    public function update($request){
        $req = json_decode($request);
        $id_worker = $req->id_worker;
        $last_name = $req->last_name;
        $phone_number = $req->phone_number;
        $mail = $req->mail;
        $cabinet = $req->cabinet;
        $start = $req->start;
        $end = $req->end;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("UPDATE staff SET last_name='{$last_name}', phone_number='{$phone_number}', cabinet='{$cabinet}', start='{$start}', end='{$end}', mail='{$mail}' WHERE id_worker={$id_worker} ");
            $connect->commit();
            return json_encode([
                'message'=>'Пользователь обновлён'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
}