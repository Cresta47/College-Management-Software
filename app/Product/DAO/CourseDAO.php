<?php
namespace App\Product\DAO;

use App\CourseModel;
use App\product\daoutil\CourseDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class CourseDAO implements ICourseDAO{

    private $courseDTOTransformer;

    public function __construct(){
        $this->courseDTOTransformer = new CourseDTOTransformer();
    }

    public function findAll($columns){
        $courses = CourseModel::all();
        if($courses != null){
            foreach($courses as $course){
                $result[] = $this->courseDTOTransformer->formatDataFromDb($course);
            }
        }else{
            throw new DAOException("Error fetching all Course!");
        }
        return $result;
    }

    public function findById($id,$columns){
        $course = CourseModel::find($id);
        if($course != null){
            $course = $this->courseDTOTransformer->formatDataFromDb($course);
        }else{
            throw new DAOException("Error fetching Course with id:".$id." !");
        }
        return $course;
    }

    public function findByIds($coursesIDs,$columns){
        $courses = CourseModel::whereIn('id',$coursesIDs)->get();
        if($courses != null){
            foreach($courses as $course){
                $result[] = $this->courseDTOTransformer->formatDataFromDb($course);
            }
        }else{
            throw new DAOException("Error fetching all Course!");
        }
        return $result;
    }

    public function create($course){
        $result = $this->courseDTOTransformer->formatDataToDb($course);
        unset($result->id); // As we are inserting new record we need to remove any ID
        $insertedCourseModel = CourseModel::create($result);
        return $this->courseDTOTransformer
            ->formatDataFromDb(
                $insertedCourseModel
            );
    }

    public function update($course){
        $transformedCourseEntity = $this->courseDTOTransformer->formatDataToDb($course);
        CourseModel::where('id','=',$course['id'])
            ->update($transformedCourseEntity);
        return $this->courseDTOTransformer->formatDataFromDb($transformedCourseEntity);
    }

    public function deleteById($id){
        $course = CourseModel::where('id','=',$id)->delete();
        if($course == null){
            throw new DAOException("Error deleting a Course!");
        }
        return null;
    }

    public function deleteByIds($ids){
        $courses = CourseModel::whereIn('id',$ids)->delete();
        if($courses == null){
            throw new DAOException("Error deleting all Courses!");
        }
        return null;
    }

}