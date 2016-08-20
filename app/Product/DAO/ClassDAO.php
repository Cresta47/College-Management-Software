<?php
namespace App\Product\DAO;

use App\ClassModel;
use App\Product\daoutil\ClassDTOTransformer;
use App\Product\response\ResponseGenerator;

Class ClassDAO implements IClassDAO{

    private $classDTOTransformer;

    public function __construct(){
        $this->classDTOTransformer = new ClassDTOTransformer();
    }

    public function findAll($columns){
        $classes = ClassModel::all();

        foreach($classes as $class){
            $result[] = $this->classDTOTransformer->formatDataFromDb($class);
            $classIDs[] = $class['id'];
        }
        return $result;
    }

    public function findById($id,$columns){
        $class = ClassModel::findOrFail($id);
        $class = $this->classDTOTransformer->formatDataToDb($class);
        return $class;
    }

    public function findByIds($classIDs,$columns){
        $classes = ClassModel::whereIn('id',$classIDs)->get();
        $result = array();
        foreach($classes as $class){
            $result[] = $this->classDTOTransformer->formatDataFromDb($class);
        }
        return $result;
    }

    public function create($class){
        $classTransformed = $this->classDTOTransformer->formatDataToDb($class);
        ClassModel::create($classTransformed);
    }

    public function update($class){

    }

    public function deleteById($id){

    }

    public function deleteByIds($ids)
    {
        // TODO: Implement deleteByIds() method.
    }


}