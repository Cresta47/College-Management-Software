<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/3/2016
 * Time: 7:31 PM
 */


namespace  App\Product\daoutil;

use App\Product\daoutil\IDTOTransformer;

class UserDTOTransformer implements IDTOTransformer{

    /*
     * Transforming data coming from the front end and Service to savable object
     */
    public function marshall($dto){
        $user['name'] = $dto['name'];
        $user['email'] = $dto['email'];
        return $user;
    }

    /*
     * Transforming the database rows to a object
     */
    public function unmarshall($databaseRow){
        $result['id'] = $databaseRow['original']['id'];
        $result['name'] = $databaseRow->name;
        $result['email'] = $databaseRow['original']['email'];
        $result['createdAt'] = $databaseRow['created_at'];
        $result['updatedAt'] = $databaseRow['updated_at'];
        $result['rememberToken'] = '';
        $result['password'] = '';
        return $result;
    }

}