<?php
require ('db.php');

class Service extends db
{
    public function getData(){
        return $this->DBAll('SELECT * from services');
    }
    public function createServices($request){
        $req = json_decode($request);
        $name = $req->name;
        $cost = $req->cost;
        $dose_preparation = $req->dose_preparation;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO services (name,cost,dose_preparation) 
                                     values ('{$name}','{$cost}','{$dose_preparation}')");
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
    public function deleteService($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE FROM services WHERE id_services='.$req->id_services,
            'Услуга удалена');
    }
    public function updateService($request){
        $req = json_decode($request);
        $id_services = $req->id_services;
        $name = $req->name;
        $cost = $req->cost;
        $dose_preparation = $req->dose_preparation;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("UPDATE services SET name='{$name}', cost='{$cost}', dose_preparation='{$dose_preparation}' WHERE id_services={$id_services} ");
            $connect->commit();
            return json_encode([
                'message'=>'Услуга обновлена'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }

}