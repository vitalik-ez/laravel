<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model{
    public $id;
    public $name;
    public $model;
    public $engine;
    public function __construct($id){
        $this->id = $id;
        $this->name = "Audi";
        $this->model = "A8";
        $this->engine = "4.2 TDI";
    }
}
