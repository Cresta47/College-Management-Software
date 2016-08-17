<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/3/2016
 * Time: 7:31 PM
 */

namespace  App\Product\daoutil;
use App\Product\daoutil\IDTOTransformer;

class CourseDTOTransformer implements IDTOTransformer{

    /*
     * Transforming data coming from the front end and Service to savable object
     */
    public function formatDataToDb($dto){

    }

    /*
     * Transforming the database rows to a object
     */
    public function formatDataFromDb($databaseRow){
        $result['id'] = $databaseRow->id;
        $result['class_id'] = $databaseRow->class_id;
        $result['name'] = $databaseRow->name;
        return $result;
    }

}