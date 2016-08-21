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

class RoleDTOTransformer implements IDTOTransformer{

//    use NepaliDateConvertible;

    /*
     * Transforming data coming from the front end and Service to savable object
     */
    public function formatDataToDb($dto){
        if(is_array($dto)){
            $dto = (object) $dto;
        }
        $result['name'] = isset($dto->name) ? $dto->name : null ;
        $result['display_name'] = isset($dto->displayName) ? $dto->displayName : null ;
        $result['description'] = isset($dto->description) ? $dto->description : null;
        return $result;
    }

    /*
     * Transforming the database rows to a object
     */
    public function formatDataFromDb($databaseRow){
        if(is_array($databaseRow)){
            $databaseRow = (object) $databaseRow;
        }
        $result['name'] = isset($databaseRow->name) ? $databaseRow->name : null;
        $result['displayName'] = isset($databaseRow->display_name) ? $databaseRow->display_name : null;
        $result['description'] = isset($databaseRow->description) ? $databaseRow->description : null;
        return $result;
    }

}