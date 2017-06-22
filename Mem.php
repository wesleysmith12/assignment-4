<?php

include "persistence_interface.php";

class Mem implements PersistenceInterface {
    protected $buf;

    public function Count(){
        return count($this->buf);
    }

    public function Create($item){
        $this->buf[] = $item;
    }

    public function Read($id){
        $target = $this->prototype->Search($id, $this->buf);
        return $target;
    }

    public function Delete($id){
        unset($this->buf[$id]);
    }

    public function ReadAll(){
        return $this->buf;
    }

    public function Update($id, $values){
        //
    }

    public function __construct($item){
        $this->type = gettype($item);
        $this->prototype = $item;
        $this->buf[$item->Asin] = $item;
    }

    public function All() {
        return $this->buf;
    }

    public function Clear(){
        unset($this->buf);
    }

    public function Insert($item = 0){
        $this->buf[] = $item;
    }

    public function Remove($idx){
        unset($this->buf[$idx]);
    }

}