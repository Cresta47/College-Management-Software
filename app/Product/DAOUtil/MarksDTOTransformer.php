<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/3/2016
 * Time: 7:31 PM
 */

namespace  App\Product\DAOUtil;
use App\Product\DAOUtil\IDTOTransformer;
use App\Product\ProductTrait\DateTime\NepaliDateConvertible;

class MarksDTOTransformer implements IDTOTransformer{

    use NepaliDateConvertible;
    /*
     * Transforming data coming from the front end and Service to savable object
     */
    public function formatDataToDb($dto){
        if(is_array($dto)){
            $dto = (object) $dto;
        }
        $result['id'] = isset($dto->id) ? $dto->id : null;
        $result['name'] = isset($dto->name) ? $dto->name : null;
        $result['course_id'] = isset($dto->course_id) ? $dto->course_id : null;
        $result['exam_id'] = isset($dto->exam_id) ? $dto->exam_id : null;
        
        return $result;
    }

    /*
     * Transforming the database rows to a object
     */
    public function formatDataFromDb($databaseRow){
        if(is_array($databaseRow)){
            $databaseRow = (object) $databaseRow;
        }
        $result['id'] = isset($databaseRow->id) ? $databaseRow->id : '';
        $result['name'] = isset($databaseRow->name) ? $databaseRow->name : null;
        $result['course_id'] = isset($databaseRow->course_id)? $databaseRow->course_id : null;
        $result['exam_id'] = isset($databaseRow->exam_id)? $databaseRow->exam_id : null;

        $result['createdAt'] = isset($databaseRow->created_at) ? $databaseRow->created_at : null;
        $result['createdAtNp'] = isset($databaseRow->created_at) ? $this->convertToBS($databaseRow->created_at) : null;
        $result['updatedAt'] = isset($databaseRow->updated_at)? $databaseRow->updated_at : null;
        $result['rememberToken'] = null;

        return $result;
    }

}