<?php
namespace App\Product\DAO;

use App\MarksModel;
use App\product\daoutil\MarksDTOTransformer;
use App\Product\response\ResponseGenerator;
use App\Product\Exception\DAOException;

Class MarksDAO implements IMarksDAO{

    private $marksDTOTransformer;

    public function __construct(){
        $this->marksDTOTransformer = new MarksDTOTransformer();
    }

    public function findAll($columns){
        $marks = MarksModel::all();
        if($marks != null){
            foreach($marks as $mark){
                $result[] = $this->marksDTOTransformer->formatDataFromDb($mark);
            }
        }else{
            throw new DAOException("Error fetching all Marks!");
        }
        return $result;
    }

    public function findById($id,$columns){
        $marks = MarksModel::find($id);
        if($marks != null){
            $marks = $this->marksDTOTransformer->formatDataFromDb($marks);
        }else{
            throw new DAOException("Error fetching Marks with id:".$id." !");
        }
        return $marks;
    }

    public function findByIds($marksIDs,$columns){
        $marks = MarksModel::whereIn('id',$marksIDs)->get();
        if($marks != null){
            foreach($marks as $mark){
                $result[] = $this->marksDTOTransformer->formatDataFromDb($mark);
            }
        }else{
            throw new DAOException("Error fetching all Marks!");
        }
        return $result;
    }

    public function create($marks){
        $result = $this->marksDTOTransformer->formatDataToDb($marks);
        unset($result->id); // As we are inserting new record we need to remove any ID
        $insertedMarksModel = MarksModel::create($result);
        return $this->marksDTOTransformer
            ->formatDataFromDb(
                $insertedMarksModel
            );
    }

    public function update($marks){
        $transformedMarksEntity = $this->marksDTOTransformer->formatDataToDb($marks);
        MarksModel::where('id','=',$marks['id'])
            ->update($transformedMarksEntity);
        return $this->marksDTOTransformer->formatDataFromDb($transformedMarksEntity);
    }

    public function deleteById($id){
        $marks = MarksModel::where('id','=',$id)->delete();
        if($marks == null){
            throw new DAOException("Error deleting a Mark!");
        }
        return null;
    }

    public function deleteByIds($ids){
        $marks = MarksModel::whereIn('id',$ids)->delete();
        if($marks == null){
            throw new DAOException("Error deleting all Marks!");
        }
        return null;
    }

}