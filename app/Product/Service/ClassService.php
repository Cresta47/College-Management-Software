<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\Service;

use App\Product\DAO\ClassDAO;
use App\Product\DAO\CourseDAO;
use App\Product\response\ResponseGeneratorImpl;

Class ClassService implements IClassService{

    private $responseGenerator;
    private $classDAO;
    private $courseDAO;
    private $courseService;

    public function __construct(){
        $this->responseGenerator = new ResponseGeneratorImpl();
        $this->classDAO = new ClassDAO();
        $this->courseDAO = new CourseDAO();
        $this->courseService = new CourseService();
    }

    public function findAll($request){

    }

    public function findById($request,$Id){

    }

    public function findByIds($request,$ids)
    {
        // TODO: Implement findByIds() method.
    }

    public function create($request){
    }

    public function update($request,$id){

    }

    public function deleteById($request,$id){

    }

    public function deleteByIds($request,$ids){

    }

    public function findUserAssociatedClasses($request){

    }

}