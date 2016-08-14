<?php
namespace App\Product\DAO;

use App\ClassModel;
use App\Product\daoutil\ClassDTOTransformer;
use App\Product\response\ResponseGenerator;

Class ClassDAO extends ClassModel{

    private $classDTOTransformer;


    public function __construct(){
        $this->userDTOTransformer = new UserDTOTransformer();
    }

    public function index(){
        $classes = ClassModel::all();

        foreach($classes as $class){
            $result[] = $this->ClassDTOTransformer->unmarshall($class);
            $classIDs[] = $class['id'];
        }
        return $result;

    }

    public function findById($id){
        $class = ClassModel::findOrFail($id);
        $class = $this->userDTOTransformer->unmarshall($class);
        return $class;
    }

    public function _create($class){
        $classMarshalled = $this->classDTOTransformer->marshall($class);
        ClassModel::create($classMarshalled);
    }

    public function _update($user){

    }

    public function _delete($id){

    }

}