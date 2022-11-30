<?php
require ('db.php');
class Preparation extends db
{
public function GEt(){
    return $this->DBAll('select * from preparation');
}
    public function delete($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE FROM preparation WHERE id_preparation='.$req->id_preparation,
            'Услуга удалена');
    }
    public function create($request){
        $req = json_decode($request);
        $name = $req->name;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO preparation (name) values ('{$name}')");
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