<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/1/2016
 * Time: 6:57 PM
 */

namespace App\Product\service;

use App\Product\dao\ClassDAO;
use App\Product\dao\CourseDAO;
use App\Product\response\ResponseGeneratorImpl;

Class ClassService {

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

    public function findAll(){
    }

    public function findById($Id){
        $class = $this->classDAO->findById($Id);
        $this->responseGenerator->setData($class);
        $this->responseGenerator->setHttpStatus(200);
        $this->responseGenerator->setBusinessStatus("RES-Class-1");
        return $this->responseGenerator->getResponse();
    }

    public function create($class){
        $this->classDAO->_create($class);
    }

    public function update(){

    }

    public function delete(){

    }

    public function findAllMyClasses(){
        $allMyCoursesIDs = $this->courseService->findAllMyCoursesIDs();
        $allMyClassesIDs = $this->courseDAO->getClassesIDByCoursesID($allMyCoursesIDs);
        $allMyClasses = $this->classDAO->findByIds($allMyClassesIDs);
        $this->responseGenerator->setData($allMyClasses);
        $this->responseGenerator->setHttpStatus(200);
        $this->responseGenerator->setBusinessStatus("RES-Class-*"); // Response contains many classes
        return $this->responseGenerator->getResponse();
    }

}