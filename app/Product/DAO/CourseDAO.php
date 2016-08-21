<?php
namespace App\Product\DAO;

use App\CourseModel;
use App\CourseUserModel;
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
        $courses = CourseModel::whereIn('id',$coursesIDs)->get();
        $result = array();
        foreach($courses as $course){
            $result[] = $this->courseDTOTransformer->formatDataFromDb($course);
        }
        return $result;
    }

    public function create($course){
    }

    public function update($course){

    }

    public function getCoursesIDByUserID($userID){
        $coursesUser = CourseUserModel::where('user_id','=',$userID)->get();
        $result = array();
        foreach($coursesUser as $courseUser){
            // If any other information besides ids is required then it should be transformed with DTOTransformer
            array_push($result, $courseUser->course_id);
        }
        return $result;
    }

    public function getClassesIDByCoursesID($coursesID){
        $courses = CourseModel::whereIn('id',$coursesID)->get();
        $result = array();
        foreach($courses as $course){
            // If any other information besides ids is required then it should be transformed with DTOTransformer
            array_push($result , $course->class_id);
        }
        return $result;
    }

    public function deleteById($id){

    }

    public function deleteByIds($ids)
    {
        // TODO: Implement deleteByIds() method.
    }

}