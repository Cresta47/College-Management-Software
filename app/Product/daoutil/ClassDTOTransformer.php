<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/3/2016
 * Time: 7:31 PM
 */


namespace  App\Product\daoutil;

use App\Product\daoutil\IDTOTransformer;

class ClassDTOTransformer implements IDTOTransformer{

    /*
     * Transforming data coming from the front end and Service to savable object
     */
    public function marshall($dto){
        $class['name']='name';
        $class['building']='building';
        $class['room']='room';
        $class['floor']='floor';
        return $class;
    }

    /*
     * Transforming the database rows to a object
     */
    public function unmarshall($databaseRow){
        $result['id'] = $databaseRow['original']['id'];
        $result['name'] = $databaseRow->name;
        $result['building'] = $databaseRow->building;
        $result['room'] = $databaseRow->room;
        $result['floor'] = $databaseRow->floor;
        $result['createdAt'] = $databaseRow['created_at'];
        $result['updatedAt'] = $databaseRow['updated_at'];
        $result['rememberToken'] = '';
        return $result;
    }

}