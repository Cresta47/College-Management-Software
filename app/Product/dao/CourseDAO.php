<?php
namespace App\Product\DAO;

use App\CourseModel;
use App\CourseUser;
use App\product\daoutil\CourseDTOTransformer;
use App\Product\response\ResponseGenerator;


Class CourseDAO{

    private $courseDTOTransformer;

    public function __construct(){
        $this->courseDTOTransformer = new CourseDTOTransformer();
    }

    public function index(){

    }

    public function findById($id){

    }

    public function findByIDs($coursesIDs){

        $courses = CourseModel::whereIn('id',$coursesIDs)->get();
        $result = array();
        foreach($courses as $course){
            $result[] = $this->courseDTOTransformer->formatDataFromDb($course);
        }
        return $result;
    }

    public function _create($class){
    }

    public function _update($user){

    }

    public function _delete($id){

    }

    public function getCoursesIDByUserID($userID){
        $coursesUser = CourseUser::where('user_id','=',$userID)->get();
        $result = array();
        foreach($coursesUser as $courseUser){
            // If any other information besides ids required IDs that should be passed from DTOTransformer
            array_push($result, $courseUser->course_id);
        }
        return $result;
    }

    public function getClassesIDByCoursesID($coursesID){
        $courses = CourseModel::whereIn('id',$coursesID)->get();
        $result = array();
        foreach($courses as $course){
            // If any other information besides ids required IDs that should be passed from DTOTransformer
            array_push($result , $course->class_id);
        }
        return $result;
    }

}