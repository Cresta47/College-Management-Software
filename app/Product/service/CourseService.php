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

class CourseService {

    private $courseDAO;
    private $responseGenerator;

    public function __construct(){
        $this->courseDAO = new CourseDAO();
        $this->responseGenerator = new ResponseGeneratorImpl();
    }

    public function findAllMyCoursesIDs(){
        $allMyCoursesIDs = $this->courseDAO->getCoursesIDByUserID(1);
        return $allMyCoursesIDs;
    }

    public function findAllMyCourses(){
        $allMyCoursesIDs = $this->findAllMyCoursesIDs();
        $allMyCourses = $this->courseDAO->findByIds($allMyCoursesIDs);
        $this->responseGenerator->setData($allMyCourses);
        $this->responseGenerator->setHttpStatus(200);
        $this->responseGenerator->setBusinessStatus("RES-Class-*"); // Response contains many classes
        return $this->responseGenerator->getResponse();
    }

}