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
        $quantity = $req->quantity;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO preparation (name,quantity) values ('{$name}' ,'{$quantity}')");
            $connect->commit();
            return json_encode([
                'message'=>'Препарат добавлен'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }

}