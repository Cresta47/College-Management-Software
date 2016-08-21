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

class CourseService implements ICourseService{

    private $courseDAO;
    private $responseGenerator;

    public function __construct(){
        $this->courseDAO = new CourseDAO();
        $this->responseGenerator = new ResponseGeneratorImpl();
    }

    public function findAll($request){}

    public function findById($request,$id){}

    public function findByIds($request,$ids){}

    public function create($request){}

    public function update($request,$id){}

    public function deleteById($request,$id){}

    public function deleteByIds($request){}

    public function findAllMyCoursesIDs(){
        $allMyCoursesIDs = $this->courseDAO->getCoursesIDByUserID(1);
        return $allMyCoursesIDs;
    }

    public function findAllMyCourses(){
        $allMyCoursesIDs = $this->findAllMyCoursesIDs();
        $allMyCourses = $this->courseDAO->findByIds($allMyCoursesIDs,array());
        $this->responseGenerator->setData($allMyCourses);
        $this->responseGenerator->setHttpStatus(200);
        $this->responseGenerator->setBusinessStatus("RES-Class-*"); // Response contains many classes
        return $this->responseGenerator->getResponse();
    }

}