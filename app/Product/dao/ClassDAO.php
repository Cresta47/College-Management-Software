<?php
namespace App\Product\DAO;

use App\ClassModel;
use App\product\daoutil\ClassDTOTransformer;
use App\Product\response\ResponseGenerator;
use Illuminate\Support\Facades\DB;


Class ClassDAO {

    private $classDTOTransformer;

    public function __construct(){
        $this->classDTOTransformer = new ClassDTOTransformer();
    }

    public function index(){
        $classes = ClassModel::all();

        foreach($classes as $class){
            $result[] = $this->classDTOTransformer->formatDataFromDb($class);
            $classIDs[] = $class['id'];
        }
        return $result;

    }

    public function findById($id){
        $class = ClassModel::findOrFail($id);
        $class = $this->classDTOTransformer->formatDataToDb($class);
        return $class;
    }

    public function findByIds($classIDs){

        $classes = ClassModel::whereIn('id',$classIDs)->get();
        $result = array();
        foreach($classes as $class){
            $result[] = $this->classDTOTransformer->formatDataFromDb($class);
        }
        return $result;

    }

    public function _create($class){
        $classMarshalled = $this->classDTOTransformer->formatDataToDb($class);
        ClassModel::create($classMarshalled);
    }

    public function _update($user){

    }

    public function _delete($id){

    }

    public function getAllClassesWithIds($classIds){

    }

}