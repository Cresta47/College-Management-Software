<?php
namespace App\Product\DAO;

use App\CourseModel;
use App\product\daoutil\CourseDTOTransformer;
use App\Product\response\ResponseGenerator;

Class CourseDAO implements ICourseDAO{

    private $courseDTOTransformer;

    public function __construct(){
        $this->courseDTOTransformer = new CourseDTOTransformer();
    }

    public function findAll($columns){
    }

    public function findById($id,$columns){
    }

    public function findByIds($coursesIDs,$columns){
    }

    public function create($course){
    }

    public function update($course){
    }

    public function deleteById($id){
    }

    public function deleteByIds($ids){
    }

}