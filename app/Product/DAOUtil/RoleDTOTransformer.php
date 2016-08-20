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
        $role['name'] = $dto['name'];
        return $role;
    }

    /*
     * Transforming the database rows to a object
     */
    public function formatDataFromDb($databaseRow){
        $result['name'] = $databaseRow->name;
        return $result;
    }

}