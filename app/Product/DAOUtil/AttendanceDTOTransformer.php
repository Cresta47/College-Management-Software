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

class AttendanceDTOTransformer implements IDTOTransformer{

    use NepaliDateConvertible;

    /*
     * Transforming data coming from the front end and Service to savable object
     */
    public function formatDataToDb($dto){
        if(is_array($dto)){
            $dto = (object) $dto;
        }
        $result['user_id'] = isset($dto->user_id) ? $dto->user_id : null;
        $result['in_or_out'] = isset($dto->in_or_out) ? $dto->in_or_out : null;
        $result['comment'] = isset($dto->comment)? $dto->comment: null;
        return $result;
    }

    /*
     * Transforming the database rows coming directly from Database to a object
     */
    public function formatDataFromDb($databaseRow){
        if(is_array($databaseRow)){
            $databaseRow = (object) $databaseRow;
        }
        $result['user_id'] = isset($databaseRow->user_id) ? $databaseRow->user_id : '';
        $result['in_or_out'] = isset($databaseRow->in_or_out) ? $databaseRow->in_or_out : null;
        $result['comment'] = isset($databaseRow->comment)? $databaseRow->comment : null;
        $result['createdAt'] = isset($databaseRow->created_at) ? $databaseRow->created_at : null;
        $result['createdAtNp'] = isset($databaseRow->created_at) ? $this->convertToBS($databaseRow->created_at) : null;
        $result['updatedAt'] = isset($databaseRow->updated_at)? $databaseRow->updated_at : null;
        $result['rememberToken'] = null;
        return $result;
    }

}