<?php

class Model{

    protected $table;
    protected $fillable;
    protected $db;

    public function __construct(){
        $this->db =  DB::getInstance();
    }

    public function create($data){

       /* array(
            'username' => 'thedc',
            'password' => '123456'
        );*/


        $keys = array_keys($data);
        $keys = '(' . implode(', ',$keys) . ')';

        foreach($data as $key => $value){
            $data[':'.$key] = $value;
            unset($data[$key]);
        }

        $newKeys = array_keys($data);
        $newKeys = '(' . implode(', ',$newKeys) . ')';


        $query = 'INSERT INTO '.$this->table.' '.$keys.' VALUES '.$newKeys;
        $req = $this->db->prepare($query);
        $req->execute($data);

        return $req->fetch();


    }

    public function update($data){

    }

    public function find($id){
        $req = $this->db->prepare('SELECT * FROM '.$this->table.' WHERE id = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        return $item;
    }



    public function delete(){

    }

}